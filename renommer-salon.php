<?php include_once 'config.php';


session_start();

$id_salon = $_POST['id_salon_rename'];
$nom = $_POST['nom'];

$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

$statement_rename = $bdd->prepare("UPDATE salons  SET nom = :nom WHERE id = :idsalon");
$statement_rename->bindParam('nom', $nom);
$statement_rename->bindParam('idsalon', $id_salon);
$statement_rename->execute();

header('location: salons.php?id='.$id_salon);
