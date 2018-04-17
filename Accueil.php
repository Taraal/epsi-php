<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MARCACHAT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="CSS/Accueil.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Style.css" rel="stylesheet" type="text/css"/>

        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
    </head>
    <body>
        <div class="container" style="margin-top: 20px;" id='navbar'>
            <div class="row" style="margin-top: 10px;">
                <div class="col" style="text-align: left;">
                    <center>
                        <img src="medias/marcassin.png" id="marca" alt="marcassin"/>
                    </center>
                </div>
                <div class="col-6">
                    <center>
                        <h1 id="titre">Bienvenue sur Marca'chat </h1>
                        <h1 id="titreport" style="font-size: 32px; margin-left: 6px;">Marca'chat</h1>
                    </center>
                </div>
                <div class="col" style="text-align: right;">
                    <center>
                        <img src="medias/Chat.png" alt="chat" id="chat"/>
                    </center>
                </div>
                <div class="col-12">
                    <nav id='menu'>
                        <ul>                        
                            <li><a href="Accueil.php" style="color: #3498DB; text-decoration: none;">Accueil</a></li>
                            <li>Salons
                                <ul>
                                    <li><a href='Salons.php' style="color: black; text-decoration: none;">Salon 1</a></li>
                                    <li><a href='Salons.php'style="color: black; text-decoration: none;">Salon 2</a></li>
                                    <li><a href='Salons.php'style="color: black; text-decoration: none;">Salon 3</a></li>
                                    <li><a href='Salons.php'style="color: black; text-decoration: none;">Salon 3</a></li>
                                </ul>
                            </li>
                            <li><a href="Aide.php"style="color: black; text-decoration: none;">Aide</a></li>
                        </ul>
                    </nav>
                </div>  
            </div>
        </div>

        <div class='container' style="margin-top: 50px;">
            <div class="row">
                <div class="col-12">
                    <div class="Creer_Salon">
                        <h2>Voulez-vous créer un salon ?</h2>
                        <form id="formulaire" action="ajouter_salon.php" method="post">
                            <div class='container' style="margin-top: 50px;">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="control-group">
                                            <input id='session' type='hidden' name='id_session' value="<?php echo "$id_session"; ?>">                   
                                             <input type="text" class="login-field" value="" placeholder="Nom du Salon" id="login-name" name="salon">
                                            <label class="login-field-icon fui-user" for="login-name"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="btn btn-primary btn-large btn-block" type="submit" value="Créer">
                                    </div>
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
