<?php include_once 'Bootstrap.php';
include_once 'config.php';


$id_salon = $_GET["id"];
?>



<?php

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


  $statement_verif = $bdd->prepare("SELECT u.id FROM utilisateurs AS u JOIN salons_utilisateurs AS su on su.id_utilisateur = u.id WHERE su.id_salon = :idsalon AND u.id= :idsession");
  $statement_verif->bindParam('idsalon', $id_salon);
  $statement_verif->bindParam('idsession', $id_session);
  $statement_verif->execute();
 if ($statement_verif->rowcount() == 1) {



$statement_message = $bdd->prepare("SELECT m.id, m.id_utilisateur, m.id_salon, m.contenu, u.prenom FROM message AS m JOIN utilisateurs AS u ON m.id_utilisateur=u.id JOIN salons AS s ON m.id_salon = s.id JOIN salons_utilisateurs AS su ON su.id_salon = s.id WHERE m.id_salon = :idsalon GROUP BY m.id");
$statement_message->bindParam('idsalon', $id_salon);
$statement_message->execute();
$select_message = $statement_message->fetchAll();

$statement_admin = $bdd->prepare("SELECT id_proprietaire FROM salons WHERE id = :idsalon AND id_proprietaire = :idproprio");
$statement_admin->bindParam('idsalon', $id_salon);
$statement_admin->bindParam('idproprio', $id_session);
$statement_admin->execute();

$statement_user = $bdd->prepare("SELECT u.prenom, su.id_utilisateur, su.id_salon, u.actif FROM utilisateurs AS u JOIN salons_utilisateurs AS su ON su.id_utilisateur=u.id WHERE su.id_salon = :idsalon");
$statement_user->bindParam('idsalon', $id_salon);
$statement_user->execute();
$select_user = $statement_user->fetchAll();

$select_invit = $bdd->prepare("SELECT s.id, s.nom FROM salons s JOIN invitations i ON s.id = i.id_salon JOIN utilisateurs u ON u.id = i.id_utilisateur WHERE s.id = i.id_salon AND i.id_utilisateur = :idsession");
$select_invit->bindParam('idsession', $id_session);
$select_invit->execute();
$invitations = $select_invit->fetchAll();

$state_salon_local = $bdd->prepare("SELECT s.nom FROM salons s WHERE s.id = :idsalon");
$state_salon_local->bindParam(':idsalon', $id_salon);
$state_salon_local->execute();
$salon_local = $state_salon_local->fetch();

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Salon</title>
        <link href="css/salons.css" rel="stylesheet" type="text/css">
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
                <div class="subtitle" id="GestionV">
                    <h3>Invitations</h3>
                        <ul>

<?php
    
    foreach($invitations as $invit){
        echo "
            <li>
            <a>" .$invit['nom'] ."</a>
           
            <form id='accepter' action='accepter.php' method='POST'>
            <input id='id_yes' type='hidden' name='id_yes' value='$id_session'>
            <input id='salon_yes' type='hidden' name='salon_yes' value=".$invit['id'].">
            <button class='btn btn-success glyphicon glyphicon-plus'></button>
            </form>

            <form id='refuser' action='refuser.php' method='POST'>
            <input id='id_no' type='hidden' name='id_no' value='$id_session'>
            
            <input id='salon_no' type='hidden' name='salon_no' value=".$invit['id'].">
            
            <input id='salon_local' type='hidden' name='salon_local' value=".$id_salon.">
            <button class='btn btn-danger glyphicon glyphicon-remove'></button>
            </form>
            </li>";
    }
?>
                        </ul>
                </div>
                <div class="subtitle" id="deconnexion">
                   <a href='traitement-deconnexion.php'><h3>Deconnexion</h3></a>
                </div>                
            </div>

        </div>
        <br>
        <div id="menu">
 
                <form id='invit' action='invitation.php' method="POST">
                    <input id='proprio_invit' type='hidden' name='id_session' value='<?php echo "$id_session";?>' >
                    <input id='salon_invit' type='hidden' name='id_salon' value='<?php echo "$id_salon";?>'>
           <h5>Utilisateur du serveur<button class="btn btn-success glyphicon glyphicon-plus" style="margin-left: 10%;"></button></h5>
            </form>
            <hr style="margin-left: 20px;margin-right: 20px;">

            <br>
<?php
$id_salon_kick = $id_salon;
foreach($select_user as $user){
    if($user['actif']==1){
        echo "<a style='color : green;'>" . $user['prenom'] . "</a>";
        echo "<form id='kick' action='traitement-kick.php' method='POST'> <input type='hidden' name='id_salon_kick' value='$id_salon_kick'> <input type='hidden' name='id_user_kick' value=".$user['id_utilisateur']."> <a onclick='return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')' href='#' onclick='document.getElementById('kick').submit()'><button class='btn btn-danger glyphicon glyphicon-remove' style='margin-left: 10%;'></button></a></form><br><br>";
     }
    else{      
        echo "<a style='color : red;'>" . $user['prenom'] . "</a>";
    
        echo "<form id='kick' action='traitement-kick.php' method='POST'> <input type='hidden' name='id_salon_kick' value='$id_salon_kick'> <input type='hidden' name='id_user_kick' value=".$user['id_utilisateur']."> <a onclick='return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')' href='#' onclick='document.getElementById('kick').submit()'><button class='btn btn-danger glyphicon glyphicon-remove' style='margin-left: 10%;'></button></a></form><br><br>";
   
   }
}

?>
        </div>

 <!-------------- CHAT -------------->

        <div id="contenu">
        <h5><?php echo $salon_local['nom']; ?></h5>
<?php


if ($statement_admin->rowcount() == 1){

        echo " <div id='popup'>";
        echo " <form id='rename' action='renommer-salon.php'  method='POST'>";
            
        echo "<input type='hidden' name='id_salon_rename' value ='".$id_salon."'>";
echo "<input type='text' name='nom' placeholder='Nom du salon' class='Champ' required>";

   echo " <button style='position: relative; left: 2%;' class='btn btn-success glyphicon glyphicon-pencil'>
             </button>";
echo "</form>";
echo " </div>";
    
  echo  "</a>
            <form id='delete' action='supprimer-salon.php' method='POST'>
                <input type='hidden' name='id_salon_delete' value='.$id_salon'.>
                <button style='position: relative; left: 2%;' class='btn btn-danger glyphicon glyphicon-remove'></button>
            </form>";
}



?>
    <hr style="margin-left: 20px;margin-right: 20px;">
            <br>
            <div class="MessageTotal">
<?php 
    foreach($select_message as $message){
      if($message['id_utilisateur'] != $id_session){
          echo "<div class='Message'><br><b>" . $message['prenom'] . "</b>";
          if($statement_admin->rowcount() == 1){
            echo "<form id='deletemessageadmin' action='supprimer_message.php' method='POST'>
                <input id='id_salon_delete' type='hidden' name='id_salon_delete' value=".$id_salon.">
                <input id='id_message_delete' type='hidden' name='id_message_delete' value=".$message['id'].">
                <button class='btn btn-danger glyphicon glyphicon-remove'></button>
                </form>";
          }   
          echo "<br><br>" . $message['contenu'] . "<br><br></div>";
          
      }
      else if ($message['id_utilisateur'] == $id_session){
          echo "<div class='Messagev2'><br><b>" . $message['prenom'] . "</b>";
          
            echo "<form id='deletemessage' action='supprimer_message.php' method='POST'>
                <input id='id_salon_delete' type='hidden' name='id_salon_delete' value=".$id_salon.">

                <input id='id_message_delete' type='hidden' name='id_message_delete' value=".$message['id'].">
                <button class='btn btn-danger glyphicon glyphicon-remove'></button>
                </form>";
          
          echo "<br><br>" . $message['contenu'] . "<br><br></div>";
      }
    }
?>
             </div>
        </div>
        <br>
        <form id='send' action="traitement_message.php" method="POST">  
            <input id='salon' type='hidden' name='salon_id' value='<?php echo "$id_salon";?>' >
            <input id='user' type='hidden' name='user_id' value='<?php echo "$id_session";?>' >
            <input id='texte' type="text" name="contenu" placeholder=" Votre Message..." class="Champ" required>
        <input class="boutton" type="submit" value="Envoyer"> 
        </form>
<?php
 }
}
else{
    echo "<p>Erreur : vous devez être connecté pour voir cette page</p>";
}
?>
    </body>


</html>
