<?php
    
    include('../dbconn.php');
    include('actions.php');

    $response = array();

    if(isset($_GET['action'])){
         $response['error'] = false;
            
        switch($_GET['action']){
            case 'getuser':
                //if(isset())
            //    getuser($id);
            getuser();
                break;

            case 'createuser':
                createuser();
            
            default:
                action_not_defined();

        }
        
        
    }
    else{
        $response['error'] = true;
        $response['message'] = 'Parameter action missing';
			
			//displaying error
			echo json_encode($response);
			
			//stopping further execution
			die();
    }



?>