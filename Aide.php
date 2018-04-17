<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MARCACHAT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="CSS/Aide.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Style.css" rel="stylesheet" type="text/css"/>

        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
    </head>
    <body>
        <div class="container" style="margin-top: 20px;" id='navbar'>
            <div class="row" style="margin-top: 10px;">
                <div class="col">
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
                <div class="col">
                    <center>
                        <img src="medias/Chat.png" alt="chat" id="chat"/>
                    </center>
                </div>
                <div class="col-12">
                    <nav id='menu'>
                        <ul>                        
                            <li><a href="Accueil.php" style="color:black; text-decoration: none;">Accueil</a></li>
                            <li>Salons
                                <ul>
                                    <li><a href='Salons.php' style="color: black; text-decoration: none;">Salon 1</a></li>
                                    <li><a href='Salons.php'style="color: black; text-decoration: none;">Salon 2</a></li>
                                    <li><a href='Salons.php'style="color: black; text-decoration: none;">Salon 3</a></li>
                                    <li><a href='Salons.phpè'style="color: black; text-decoration: none;">Salon 3</a></li>
                                </ul>
                            </li>
                            <li><a href="Aide.php"style="color: #3498DB; text-decoration: none;">Aide</a></li>
                        </ul>
                    </nav>
                </div>  
            </div>
        </div>

        <div class="container" id="ConteneurAide">
            <div class="row" style="padding-left: 20px; padding-right: 20px;">

                <div class="col-sm-4" id="EspaceAide">
                    <div id="Aide">
                        <p>L'onglet "Accueil" vous permettra de revenir au menu principal et de créer un salon si vous le souhaitez.</p>
                    </div>
                </div>

                <div class="col-sm-4" id="EspaceAide">
                    <div id="Aide">
                        <p>L'onglet "Salons" vous permet de gérer les salons auquel vous avez accès et de voir la liste des utilisateurs qui y sont connectés.</p>
                    </div>
                </div>
                
                <div class="col-sm-4" id="EspaceAide">
                    <div id="Aide">
                        <p>Si vous avez oubliez des informations, vous pourrez toujours consulter l'onglet "Aide".</p>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>
