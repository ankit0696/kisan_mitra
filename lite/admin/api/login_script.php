<?php
session_start();
require_once 'login.php';
$response = array();
// if(isset($_SESSION['email'])){
// 	 header('Location: admin.php' , true, $statusCode);
// }


if($_SERVER['REQUEST_METHOD']=='POST'){

	if(isset($_POST['email']) and 
	isset($_POST['password']))
	{

		$db= new login();
		if($db->userLogin($_POST['email'],$_POST['password']))
		{


            $_SESSION['email']=$_POST['email'];
            

			 header('Location: ../admin.php' , true, $statusCode);
			die();

			
		}
		else
		{
			$response['error']=true;
            $response['message']="wrong credentials";
           
		}
	}
	else
	{

		$response['error']=true;
		$response['message']="required fields missing";
	}
}
// else
// {
	
// 	$response['error']=true;
// 	$response['message']="Inavlid request";

// }