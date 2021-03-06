<?php include_once 'Bootstrap.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>MARCACHAT</title>
        <link href="CSS/Style.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Accueil.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
    </head>
    <body>
        <div class="topwelcome">
            <div class="round">
                <div class="logo" id="marcassin">
                    <img src="medias/marcassin.png" alt="marcassin"/>
                </div>
            </div>

            <div class="round">
                <div class="logo" id="chat">
                    <img src="medias/Chat.png" alt="chat" id="chatimg"/>
                </div>
            </div>

            <div id="Welcome">
                <h1>Bienvenue sur Marca'chat </h1>
                <hr>
                <nav id="menuwelcome"> 
                    <div class="subtitle" id="Accueil">
                        <a href="Accueil.php"><h3>Accueil</h3></a>
                    </div>
                    <div class="subtitle" id="SalonsV">
                        <h3>Salons</h3>
                        <ul>
                            <li><a href='salons.php'>Salon 1 </a></li>
                            <li><a href='salons.php'>Salon 2 </a></li>
                            <li><a href='salons.php'>Salon 3 </a></li>
                            <li><a href='salons.php'>Salon 3 </a></li>
                        </ul>
                    </div>
                    <div class="subtitle" id="AideV" >
                        <h3>Aide</h3>
                    </div>
                </nav>
            </div>        
        </div>   


        <div class="Creer_Salon">
            <h2>Voulez-vous créer un salon ?</h2>
            <form id="formulaire" action="Ajoutez_Salon.php" method="post">
                
                <div class="control-group" style="margin-top: 50px;">
                    <input type="text" class="login-field" value="" placeholder="Nom du Salon" id="login-name" name="salon">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <input class="btn btn-primary btn-large btn-block" type="submit" value="Créer">
            </form>
        </div>
    </body>
</html>
