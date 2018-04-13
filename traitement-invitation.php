<?php include_once 'config.php';

session_start();

$id_utilisateur = $_POST['id_user_add'];
$id_salon = $_POST['id_salon'];

$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);


$insert_invit = $bdd->prepare('INSERT INTO invitations (id_salon, id_utilisateur) VALUES (:id_salon, :id_utilisateur)');
$insert_invit->bindParam('id_salon', $id_salon);
$insert_invit->bindParam('id_utilisateur', $id_utilisateur);
$insert_invit->execute();


header('location: salons.php?id='.$id_salon);
