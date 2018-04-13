<?php
include_once 'config.php';
session_start();

$bdd = new PDO("mysql:host=".config::SERVERNAME.";dbname=".config::DBNAME, config::USER, config::PASSWORD);

$deco = $bdd->prepare("UPDATE utilisateurs SET actif = 0 WHERE identifiant = :login");
$deco->bindParam('login', $_SESSION['login']);$deco->execute();

session_destroy();
header('location:index.php');
