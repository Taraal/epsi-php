<?php include_once 'config.php';

session_start();


$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);


if(isset($_SESSION['login'])){
 
 // RECUPERATION DE L'ID SESSION
   $identifiant_session = $_SESSION['login'];
    $statement_id = $bdd->prepare("SELECT id FROM utilisateurs WHERE identifiant = :identifiant");
  $statement_id->bindParam('identifiant', $identifiant_session);
  $statement_id->execute();
  $select_id = $statement_id->fetch();
  $select_id_array = $select_id[0];
  $id_session = $select_id_array[0]; 
  // FIN DE LA RECUP 


$statement_salon = $bdd->prepare("SELECT s.id, s.nom FROM salons AS s JOIN utilisateurs AS u ON u.id = s.id_proprietaire JOIN salons_utilisateurs AS su ON su.id_salon = s.id WHERE su.id_utilisateur = :id OR s.id_proprietaire = :id GROUP BY s.id");
  $statement_salon->bindParam('id', $id_session);
  $statement_salon->execute();
  $select_salon = $statement_salon->fetchAll();

 
?>
<!DOCTYPE html>
   
<html>
    <head>
        <meta charset="UTF-8">
        <title>MARCACHAT</title>
        <link rel="stylesheet" href="css/accueil.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
    </head>
    <body>
    <div class="topwelcome">
        <div class="round">
            <div class="logo" id="marcassin">
                <img src="medias/marcassin.png" alt="marcassin"/>
            </div>
        </div>
        
        <div class="round">
            <div class="logo" id="chat">
                <img src="medias/Chat.png" alt="chat" id="chatimg"/>
            </div>
        </div>
        
        <div id="Welcome">
            <h1>Bienvenue sur Marca'chat </h1>
            <hr>
            <nav id="menuwelcome"> 
                <div class="subtitle" id="Accueil">
                    <a href="accueil.php"><h3>Accueil</h3></a>
                </div>
                <div class="subtitle" id="SalonsV">
                    <h3>Salons</h3>
                        <ul>
<?php
     foreach ($select_salon as $salon){
        echo "<li><a href='salons.php?id=" . $salon['id'] . "'>" . $salon['nom'] . "</a></li>"; 
     }
?>  
                          </ul>
                </div>
                <div class="subtitle" id="AideV" >
                    <h3>Aide</h3>
                </div>
            </nav>
        </div>
        
    </div>
<?php
  
}
else{
    echo "<p> Erreur 2 : vous devez être connecté pour voir cette page</p>";
header('location: index.php');  
}
?>
    </body>
</html>
