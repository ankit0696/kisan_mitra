<?php 
	
	class get_state_details{
		public  $con;

		function __construct()
		{
			require_once './includes/db_connect.php';
			$db = new db_connect();
			$this->con = $db->connect();
		}
		function retrive_state_details($month)
		{
			$query = "SELECT id,rice_{$month} as value from state_wise_rice_tbl";
			$run = mysqli_query($this->con,$query);

			return $run;

		}

	}


			