<?php include_once 'Bootstrap.php'; ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>MARCACHAT</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">   
</head>

<body>
	<div class="login">
		<div class="login-screen">
                   
                    <div class ='logo' id='marcassin'>
                        <img src='medias/marcassin.png' alt="Le logo marcassin">
                    </div>

                    <div class='logo' id='chat'>
                        <img src="medias/Chat.png" alt="Le logo du chat">
                    </div>
                    
                    <div class="app-title">
			<h1>Marca'chat</h1>
                    </div>

                    <div class="login-form"> 
                        <form action="connexion.php" method="post">
                            <div class="control-group">
                        
                            <input type="text" class="login-field" value="" placeholder="Nom d'utilisateur" id="login-name" name="login">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                            </div>

                            <div class="control-group">
                            <input type="password" class="login-field" value="" placeholder="Mot de passe" id="login-pass" name="pwd">
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                            </div>
                            
                            <input class="btn btn-primary btn-large btn-block" type="submit" value="Connexion">
                            
                            
                        </form>
                    </div>
		</div>
	</div>
</body>

</html>
