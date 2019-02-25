<?php
require_once '../../api/includes/db_connect.php';

class login{

	public $con;
	function __construct()
	{	

		$db = new db_connect();
		$this->con= $db->connect();
	}


	 public function userLogin($email,$pass){

		$password=md5($pass);
		$query = "select email from admin_login_tbl where email='$email' and password ='$password' ";
		$run = mysqli_query($this->con,$query);
		$data = mysqli_fetch_assoc($run);
		if(!empty($data))
		{
            
			return true;
		}
		else
		{
			return false;
		}


	}
	
}
