<?php


//pour que la limite du temps d'execution du script ne soit pas bloqué à 30 secondes
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
    $db = new PDO("mysql:host=localhost;dbname=csv" 
                , "root", "modepasse1", array(PDO::ATTR_PERSISTENT => true)); 
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
    
    $result = $db->prepare("SELECT Identifiant FROM utilisateurs WHERE Identifiant = ? ");
    $result->bindParam(1, $champs5);
    $result->execute();
    
    $result_row = 0;
    
    foreach ($result as $row){
        $result_row++;
    }
    
    if ($result_row === 0){
        ;
        //changer les valeurs host/dbname/user/password
        
        $sql = $db->prepare("INSERT INTO utilisateurs (Civilite, Nom, Prenom, mail, Identifiant, Mot_de_Passe, Actif) VALUES (? ,? ,?, ?, ?, ?, ?)");
        $sql->bindParam(1, $champs1);
        $sql->bindParam(2, $champs2);
        $sql->bindParam(3, $champs3);
        $sql->bindParam(4, $champs4);
        $sql->bindParam(5, $champs5);
        $sql->bindParam(6, $champs6);
        $sql->bindParam(7, $champs7);
        $sql->execute();
        $cpt++;
    }
    
}
            
//fermeture du fichier
fclose($fp);

$db = null;
?>
<h2 align="center">Nombre de valeurs normalement enregistrées : <?php echo $cpt; ?></h2>
