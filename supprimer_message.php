<?php include_once 'config.php';

session_start();

$id_message = $_POST['id_message_delete'];
$id_salon = $_POST['id_salon_delete'];



$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

$delete_mess = $bdd->prepare("DELETE FROM message WHERE id = ?");
$delete_mess->execute(array($id_message));

header('location: salons.php?id='.$id_salon);
