<?php 

	$actions = $_POST['action'];
		

	if($actions=='admin_login')
	{
		//print_r($_REQUEST);
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username && $password != '')
		{
			$pass = 'Dinesh Choudhury123';
			$method = 'aes256';

			$givenuname= openssl_encrypt ($username, $method, $pass);
			$givenpass= openssl_encrypt ($password, $method, $pass);
			// echo $givenuname;
			// echo $givenpass;
			$uname='u4J6rz2OTyEyEF9JHaxZqQ==';
			$passs='NDNMr5AXFGwxYzrbj1OgkQ==';
			
			if ($uname==$givenuname && $passs==$givenpass)
			{
				session_start();
				$_SESSION["add_name_se"] = $username;
				echo 'success';
			}
			else
			{
				echo"fail";
			}
		}
		else
		{
			echo "ha ha ha. Smart";
		}
	}
	else if($actions=='session_out')
	{
		
		//managing the seesion onlogout
		session_start();
		session_destroy();
		unset($_SESSION['add_name_se']);
		echo 'loged_out';
		
	}
	//Below part is to check the session is on or not
	else if($actions=='check_session')
	{
		session_start();
		echo $_SESSION['add_name_se'];
		
	}	
?>