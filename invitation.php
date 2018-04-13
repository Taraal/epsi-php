<?php include_once 'Bootstrap.php';
include_once 'config.php';

session_start();


$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

$id_session = $_POST['id_session'];
$id_salon = $_POST['id_salon'];

 

  $statement_verif = $bdd->prepare("SELECT u.id FROM utilisateurs AS u JOIN salons_utilisateurs AS su on su.id_utilisateur = u.id WHERE su.id_salon = :idsalon AND u.id= :idsession");
  $statement_verif->bindParam('idsalon', $id_salon);
  $statement_verif->bindParam('idsession', $id_session);
  $statement_verif->execute();
  if ($statement_verif->rowcount() == 1) {

?>
      
<form id='search' action="invitation.php" method="POST">  
<input id='id_session' type='hidden' name='id_session' value='<?php echo $id_session; ?>'>
<input id='id_salon' type='hidden' name='id_salon' value ='<?php echo $id_salon ?>' >
  <input id='lookup' type='text' name='contenu' placeholder="Recherchez un nom..." class="Champ" required>
        <input class="boutton" type='submit' value="Rechercher">
</form> 
    
<?php

     if (isset ($_POST['contenu'])){ 
     
      $lookup = $_POST['contenu'];


    $statement_lookup = $bdd->prepare("SELECT u.id, u.nom, u.prenom FROM utilisateurs u WHERE u.nom LIKE :contenu || u.prenom LIKE :contenu");
    $statement_lookup->bindParam('contenu', $lookup);
    $statement_lookup->execute();
    $recherche = $statement_lookup->fetchAll();

   
    foreach($recherche as $user){
        echo "<h3>".$user['nom']."</h3><br><h4>".$user['prenom']."</h4><form id='add' action='traitement-invitation.php' method='POST'> <input type='hidden' name='id_salon' value=".$id_salon."><input type='hidden' name='id_user_add' value =".$user['id']."><button class='btn btn-success glyphicon glyphicon-plus' style='margin-left : 10%;'></button></a></form>";
    
    }
    

     }

  
}
?>
