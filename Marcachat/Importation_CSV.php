<?php include_once 'Bootstrap.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/csv.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container">

            <h1>Veuillez choisir le fichier .csv à importer</h1>
            
            <br>

            <form method="POST" enctype="multipart/form-data" action="import.php">

                <input name="userfile" type="file" value="table"><br>
                <input class="btn btn-default" name="submit" type="submit" value="Importer">

            </form>

        </div>

    </body>
</html>
