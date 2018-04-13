
<?php include_once 'config.php';

session_start();

$id_salon = $_POST['id_salon_delete'];

$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

$statement_delete = $bdd->prepare("DELETE FROM salons WHERE id = :idsalon");
$statement_delete->bindParam('idsalon', $id_salon);
$statement_delete->execute();


header('location: accueil.php');

