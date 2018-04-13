<?php
include_once 'config.php';
session_start();

$bdd = new PDO("mysql:host=".config::SERVERNAME."; dbname=".config::DBNAME, config::USER, config::PASSWORD);

$id_salon = $_POST['salon_id'];
$contenu = $_POST['contenu'];
$id_user = $_POST['user_id'];


$push = $bdd->prepare('INSERT INTO message (id_utilisateur, id_salon, contenu) VALUES (:id_user, :id_salon, :contenu)');
$push->bindParam('id_user', $id_user);
$push->bindParam('id_salon', $id_salon);
$push->bindParam('contenu', $contenu);
$push->execute();


header("location: salons.php?id=$id_salon");
