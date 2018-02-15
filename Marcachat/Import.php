<?php


//pour que la limite du temps d'execution du script ne soit pas bloquer à 30 secondes
set_time_limit(0);

//array_unique pour ne pas avoir de doublon
extract(array_unique(INPUT_POST)); // cette ligne pose problème, le INPUT_POST est considéré comme un int (mais elle fonctionne tout de même)

$fichier = $_FILES["userfile"]["name"];

if ($fichier) { // ouverture du fichier temporaire
    $fp = fopen($fichier, "r");
} else { //fichier inconnu
    ?>
    <p align="center">- Importation échouée -</p>
    <p align="center"><b>Désolé mais vous n'avez pas spécifié de chemin valide ...</b></p>

    <?php
    exit();
}

//déclaration de la variable "cpt" qui permettra de compter le nombre d'enregistrement réalisé 
$cpt = 0;
?>
<p align="center">- Importation Réussie -</p>
<?php
//importation
while (!feof($fp)) {
    $ligne = fgets($fp, 4096);
    // on crée un tableau des éléments séparés par des points virgules
    $liste = explode(";", $ligne);
    $table = filter_input(INPUT_POST, 'userfile');
    // premier élément
    $liste[0] = (isset($liste[0])) ? $liste[0] : Null;
    $liste[1] = (isset($liste[1])) ? $liste[1] : Null;
    $liste[2] = (isset($liste[2])) ? $liste[2] : Null;
    $liste[3] = (isset($liste[3])) ? $liste[3] : Null;
    $liste[4] = (isset($liste[4])) ? $liste[4] : Null;
    $liste[5] = (isset($liste[5])) ? $liste[5] : Null;
    $liste[6] = (isset($liste[6])) ? $liste[6] : Null;
    
    // crypte les mots de passes avec le mode de cryptage : sha256
    $mode='sha256';
    $liste[5] = hash($mode , $liste[5]);
    
    $champs1 = $liste[0];
    $champs2 = $liste[1];
    $champs3 = $liste[2];
    $champs4 = $liste[3];
    $champs5 = $liste[4];
    $champs6 = $liste[5];
    $champs7 = $liste[6];
    
    if ($champs1 != '') {
        $cpt++;
        //changer les valeurs host/dbname/user/password
        $db = new PDO("mysql:host=localhost;dbname=csv" 
                , "Taral", "modepasse1", array(PDO::ATTR_PERSISTENT => true)); 
        $sql = ("INSERT INTO utilisateurs(Civilite, Nom, Prenom, Email, Identifiant, Mot_de_Passe, Actif) Values ('$champs1','$champs2','$champs3','$champs4','$champs5','$champs6','$champs7')");
        $result = $db ->query($sql);
    }
}
            
//fermeture du fichier
fclose($fp);
?>
<h2 align="center">Nombre de valeurs normalement enregistrées : <?php echo $cpt; ?></h2>
