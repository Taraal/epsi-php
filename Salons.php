<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MARCACHAT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--Modal-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link href="CSS/Salons.css" rel="stylesheet" type="text/css"/>
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
                            <li><a href="Accueil.php" style="color: black; text-decoration: none;">Accueil</a></li>
                            <li style="color:black">Salons
                                <ul>
                                    <li><a href='Salons.php' style="color: #3498DB; text-decoration: none;">Salon 1</a></li>
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

        <div class='container' style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-9" id="EspaceChat">
                    <div id="TitleChat" style="background-color: white;">
                        <h5 style="text-align: center;"><b>Nom du Serveur</b>
                            <div id="EspaceBoutton">
                                <button id="Espace1Bouton" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger" style="margin-left: 10px;"><i class="fa fa-close"></i></button>
                                <button id="userportable" class="btn btn-success" type="button" style="margin-left: 10px;" data-toggle="modal" data-target="#ModalUser"><i class="fa fa-user"></i></button>
                            </div>
                        </h5>
                    </div>

                    <div id="Chat" style="background-color: white;">
                        <div class="Message"><br><b>Jean-Michel</b><br><br>Yo la famille<br><br></div>

                        <div class="Message"><br><b>Monique</b><br><br>Yop tout le monde c'est Gotaga<br><br></div>

                        <div class="Message"><br><b>Jean-Michel</b><br><br>Sa va ?<br><br></div>

                        <div class="Message"><br><b>Catherine</b><br><br>Yo<br><br></div>

                        <div class="Messagev2"><br><b>Miss Jirachi</b><br><br>Coucou !!!<br><br></div>

                        <div class="Message"><br><b>Catherine</b><br><br>Salut Miss Jirachi<br><br></div>
                    </div>
                    <div id="POSTChat">
                        <form action="" method="POST" style="margin-top: 10px;">
                            <input type="text" name="Nom" placeholder=" Votre Message..." class="Champ" required>
                            <input class="boutton" type="submit" value="Envoyer" >
                        </form>
                    </div>
                </div>                

                <div class="modal fade" id="ModalUser">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="text-align: center;"><b>Utilisateurs</b><button class="btn btn-success" style="margin-left: 20px;"><i class="fa fa-plus"></i></button></h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <a style="color: green;">Utilisateur 1</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 2</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 3</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 4</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 5</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 6</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 7</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 8</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 9</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 1</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 2</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 3</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 4</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 5</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 6</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 7</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 8</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 9</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 1</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 2</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 3</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 4</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 5</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 6</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 7</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 8</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 9</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 1</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 2</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 3</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: green;">Utilisateur 4</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 5</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 6</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 7</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 8</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                                <a style="color: red;">Utilisateur 9</a>
                                <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                                    <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" id="EspaceUtilisateur">
                    <div id="TitleUtilisateur" style="background-color: white;">
                        <h5 style="text-align: center;"><b>Utilisateurs</b><button class="btn btn-success" style="margin-left: 20px;"><i class="fa fa-plus"></i></button></h5>
                    </div>

                    <div id="Utilisateur" style="background-color: white;">
                        <a style="color: green;">Utilisateur 1</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 2</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 3</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 4</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 5</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 6</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 7</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 8</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 9</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 1</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 2</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 3</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 4</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 5</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 6</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 7</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px; height: 3px;"><i class="fa fa-close" style="font-size: 3px;"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 8</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 9</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 1</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 2</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 3</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 4</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 5</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 6</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 7</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 8</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 9</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 1</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 2</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 3</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: green;">Utilisateur 4</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 5</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 6</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 7</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 8</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>

                        <a style="color: red;">Utilisateur 9</a>
                        <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')" href="">
                            <button class="btn btn-danger" style="margin-left: 20px;"><i class="fa fa-close"></i></button></a><br><br>
                    </div>
                </div>

            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
