<?php
		session_start();
		ob_start();

		unset($_SESSION['email']);


		session_destroy();
		ob_clean();
		header('Location: ../../index.php' , true, $statusCode);
			die();



?>