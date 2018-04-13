<?php include_once 'config.php';

session_start();

$db = new PDO('mysql:host='.config::SERVERNAME.';dbname='.config::DBNAME, config::USER, config::PASSWORD);

$id = $_POST['id_session'];

$nomsalon=$_POST['salon'];

$req = $db->prepare("INSERT INTO salons (nom, id_proprietaire) VALUES (:salon, :id_session)");
$req->bindParam('salon', $nomsalon);
$req->bindParam('id_session', $id);
$req->execute();

$db = null;



header('location: accueil.php');
?>

