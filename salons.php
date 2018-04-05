<?php include_once 'Bootstrap.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Salon</title>
        <link href="css/salons.css" rel="stylesheet" type="text/css"/>
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
                <div class="subtitle" id="Gestion V">
                    <h3>Gestion</h3>
                </div>
                
            </div>

        </div>
        <br>
        <div id="menu">
            <h5>Utilisateur du serveur<button class="btn btn-success glyphicon glyphicon-plus" style="margin-left: 10%;"></button></h5>

            <hr style="margin-left: 20px;margin-right: 20px;">
            
            <br>

            <a style="color: green;">Utilisateur 1</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 2</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 3</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 4</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 5</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 6</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 7</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 8</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 9</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 1</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 2</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 3</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 4</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 5</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 6</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 7</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 8</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 9</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 1</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 2</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 3</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 4</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 5</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 6</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 7</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 8</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 9</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 1</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 2</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 3</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: green;">Utilisateur 4</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 5</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 6</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 7</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 8</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

            <a style="color: red;">Utilisateur 9</a>
            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href=""><button class="btn btn-danger glyphicon glyphicon-remove" style="margin-left: 10%;"></button></a><br><br>

        </div>

        <div id="contenu">
            <h5>Salon n°1
                <a href=""><button style="position: relative; left: 2%;" class="btn btn-success glyphicon glyphicon-pencil"></button></a>
                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce channel ?')" href=""><button style="position: relative; left: 2%;" class="btn btn-danger glyphicon glyphicon-remove"></button></a>
            </h5>
            <hr style="margin-left: 20px;margin-right: 20px;">
            <br>
            <div class="MessageTotal">
                <div class="Message"><br><b>Jean-Michel</b><br><br>Yo la famille<br><br></div>

                <div class="Message"><br><b>Monique</b><br><br>Yop tout le monde c'est Gotaga<br><br></div>

                <div class="Message"><br><b>Jean-Michel</b><br><br>Sa va ?<br><br></div>

                <div class="Message"><br><b>Catherine</b><br><br>Yo<br><br></div>

                <div class="Messagev2"><br><b>Miss Jirachi</b><br><br>Coucou !!!<br><br></div>

                <div class="Message"><br><b>Catherine</b><br><br>Salut Miss Jirachi<br><br></div>
            </div>
        </div>
        <br>
        <form action="" method="POST">  
            <input type="text" name="Nom" placeholder=" Votre Message..." class="Champ" required>
            <input class="boutton" type="submit" value="Envoyer" >
        </form>
    </body>
</html>
