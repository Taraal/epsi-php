
<?php include_once 'config.php';

session_start();

$id_salon = $_POST['id_salon_delete'];

$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

$statement_delete = $bdd->prepare("DELETE FROM salons WHERE id = ?");
$statement_delete->execute(array($id_salon));

echo $statement_delete->rowcount();
var_dump($id_salon);

//header('location: accueil.php');

