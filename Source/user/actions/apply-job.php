<?php
    
    require_once('../../dbconn.php');

    if(isset($_POST['jobid'])){
    $id = $_POST['jobid'];
    
    date_default_timezone_set('Asia/Kolkata');
    $datee = date("jS \of F Y h:i:s A");
        
        if(isset($_SESSION['id'])){
            $userid = $_SESSION['id'];
        }
        else{
            $userid  = 'dummy'; //dummy 
        }
        
    $query = "INSERT INTO applied_job (jobid, userid, date) VALUES ('".$id."', '".$userid."', '".$datee."');";
    
        $exec = mysqli_query($conn, $query);
        if($exec){
            echo 'INSERTED';
            
            header('Location: ../dash.php?action=Job+Applied+Successfully');
        }
        else {
            echo 'Unknown Error. Contact Administrator.';
        }
}
else {
    echo 'Error Occured';
}


?>