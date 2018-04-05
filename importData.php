<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //load the database configuration file
            include 'dbConfig.php';

            if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $prevQuery = "SELECT id FROM utilisateurs WHERE email = '".$line[4]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $db->query("UPDATE utilisateurs SET Civilite = '".$line[1]."', Nom = '".$line[2]."', Prenom = '".$line[3]."', Email = '".$line[4]."', Identifiant = '".$line[5]."', MDP = '".$line[6]."', Actif = '".$line[7]."' WHERE id = '".$line[0]."'");
                }else{
                    //insert member data into database
                    $db->query("INSERT INTO utilisateurs (Civilite, Nom, Prenom, Email, Identifiant, MDP, Actif, status) VALUES ('".$line[1]."','".$line[2]."','".$line[3]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
                }
            }
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
        }else{
        $qstring = '?status=invalid_file';
        }
        

        //redirect to the listing page
        header("Location: index.php".$qstring); 
        ?>
    </body>
</html>
