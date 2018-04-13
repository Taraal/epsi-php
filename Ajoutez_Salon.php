<?php

session_start();

$db = new PDO('mysql:dbname=php_projet; host=localhost', 'SimonRethore', 'Epsi2018');

//$id = $_SESSION['id'];

$id=1;

$nomsalon=$_POST['salon'];

$req = $db->prepare("INSERT INTO salons (nom, id_proprietaire) VALUES ('$nomsalon', $id)");


$req->execute();

$db = null;

header('Location:Accueil.php');
?>

