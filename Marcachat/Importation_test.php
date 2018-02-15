<?php
//load the database configuration file
include 'dbConfig.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Members list
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Members</a>
        </div>
        <div class="panel-body">
            <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Civilite</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Email</th>
                      <th>Identifiant</th>
                      <th>MDP</th>
                      <th>Actif</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //get records from database
                    $query = $db->query("SELECT * FROM utilisateurs ORDER BY id DESC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['Civilite']; ?></td>
                      <td><?php echo $row['Nom']; ?></td>
                      <td><?php echo $row['Prenom']; ?></td>
                      <td><?php echo $row['Email']; ?></td>
                      <td><?php echo $row['Identifiant']; ?></td>
                      <td><?php echo $row['MDP']; ?></td>
                      <td><?php echo ($row['Actif'] == '1')?'Active':'Inactive'; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>