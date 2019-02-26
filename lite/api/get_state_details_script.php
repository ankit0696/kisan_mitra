<?php

require_once 'get_state_details.php';
$response = array();

if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['month']))
    {
        $obj = new get_state_details();
        $result = $obj->retrive_state_details($_POST['month']);
       
        while($temp = mysqli_fetch_assoc($result)){
            $response[] = $temp;
        }



    }
    







}

echo json_encode($response);