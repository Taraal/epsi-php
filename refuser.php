<?php include_once 'config.php';

session_start();

$id_user = $_POST['id_no'];
$id_salon = $_POST['salon_no'];



$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);


$invit_del = $bdd->prepare("DELETE FROM invitations WHERE invitations.id_salon = :id_salon AND invitations.id_utilisateur = :id_user");
$invit_del->bindParam('id_salon', $id_salon);
$invit_del->bindParam('id_user', $id_user);
$invit_del->execute();


header('location: accueil.php');
