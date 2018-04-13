<?php include_once 'config.php';

session_start();

$id_user = $_POST['id_yes'];
$id_salon = $_POST['salon_yes'];

$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

$invit_yes = $bdd->prepare('INSERT INTO salons_utilisateurs(id_salon, id_utilisateur) VALUES(:id_salon, :id_user)');
$invit_yes->bindParam('id_salon', $id_salon);
$invit_yes->bindParam('id_user', $id_user);
$invit_yes->execute();

$invit_del = $bdd->prepare("DELETE FROM invitations WHERE invitations.id_salon = :id_salon AND invitations.id_utilisateur = :id_user");
$invit_del->bindParam('id_salon', $id_salon);
$invit_del->bindParam('id_user', $id_user);
$invit_del->execute();


header('location: salons.php?id='.$id_salon);
