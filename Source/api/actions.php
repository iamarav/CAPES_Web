<?php

    function action_not_defined(){
        $response['error'] = true;
        $response['message'] = "Action not defined";
        echo json_encode($response);
    }

    function getuser(){
        if(isset($_GET['id'])){
        $response['error'] = false;
        $response['message'] = "Action not defined";
        }
        else{
            $response['error'] = true;
            $response['message'] = "ID not defined";
            echo json_encode($response);
        }
    }

?>