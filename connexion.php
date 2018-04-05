<?php  

$pwd_crypt = hash('sha256', $_POST["pwd"]);
$login = $_POST["login"];

$db = new PDO("mysql:host=localhost;dbname=csv" 
                , "Taral", "modepasse1");

$check = $db->prepare("SELECT Identifiant, Mot_de_Passe FROM utilisateurs WHERE Identifiant = ? AND Mot_de_Passe = ? ");
$check->bindParam(1, $login);
$check->bindParam(2, $pwd_crypt);
$check->execute();

$check_row = 0;
foreach ($check as $row){
        $check_row++;
    }

if( $check_row === 1 ){
    session_start();
    
    $_SESSION['login'] = $login;
    $_SESSION['pwd'] = $_POST['pwd'];
    
    header('location: accueil.php');
}

else{
    echo '<body onLoad="alert(\'Membre non reconnu...\')">';
    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}

