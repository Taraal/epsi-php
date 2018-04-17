<?php include_once 'Bootstrap.php'; ?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MARCACHAT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="CSS/index.css">
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">   
    </head>

    <body>
        <div class="container">
            <div class='row'>
                <div class='col-xs-1'></div>
                <div class="col-xs-10">
                    <div class="login">
                        <div class="login-screen">

                            <div class ='logo' id='marcassin'>
                                <img src='Medias/Marcassin.png' alt="Le logo marcassin">
                            </div>

                            <div class='logo' id='chat'>
                                <img src="Medias/Chat.png" alt="Le logo du chat">
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
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>

</html>
