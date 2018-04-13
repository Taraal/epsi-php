<?php
include_once 'config.php';
session_start();

$id_salon = $_POST['id_salon_kick'];
$id_user = $_POST['id_user_kick'];

$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

if(isset($_SESSION['login'])){

    //recup id session
    $login = $_SESSION['login'];
    $statement_id = $bdd->prepare("SELECT id FROM utilisateurs WHERE identifiant = :identifiant");
    $statement_id->bindParam('identifiant', $login);
    $statement_id->execute();
    $select_id = $statement_id->fetch();
    $select_id_array = $select_id[0];
    $id_session = $select_id_array[0]; 
    // FIN DE LA RECUP 
    
    $statement_admin = $bdd->prepare("SELECT id_proprietaire FROM salons WHERE id = :idsalon AND id_proprietaire = :idproprio");
    $statement_admin->bindParam('idsalon', $id_salon);
    $statement_admin->bindParam('idproprio', $id_session);
    $statement_admin->execute();
    if ($statement_admin->rowcount() == 1){

        echo "lol";

        $statement_kick = $bdd->prepare("DELETE FROM `salons_utilisateurs` WHERE `salons_utilisateurs`.`id_salon` = :idsalon AND `salons_utilisateurs`.`id_utilisateur` = :iduserkick");
        $statement_kick->bindParam('idsalon', $id_salon);
        $statement_kick->bindParam('iduserkick', $id_user);
        $statement_kick->execute();




        header("location:salons.php?id=$id_salon");
    }
    else {
        echo "<p> Erreur : vous n'êtes pas propriétaire du salon </p>";

        header("location: salons.php?id=$id_salon");
    }
}
else{
echo "<p> Erreur : vous n'êtes pas connecté </p>";

header("location: index.php");
}
