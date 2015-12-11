<?php
	include("config.php");	
	include("db.php");
	
	$user = $_POST['email'];	
	$pass = $_POST['password'];
	$query_email = "SELECT * FROM user WHERE `email` = '" . $user . "'";
	
	$stm = $dbh->query($query_email);
	$result = $stm->fetch();
	
	if(!$result) {		
		echo "This user does not exist";
		die();
	}
	
	if($result['password'] === $pass) {		
		$_SESSION['user'] = $result['email'];
		$_SESSION['privilige'] = $result['privilige'];
		$_SESSION['name'] = $result['name'];
		$_SESSION['id'] = $result['id'];
		if ($_SESSION['privilige'] === "2"){
			header("Location: ../user.php");
		}		
		if($_SESSION['privilige'] === "1"){
			header("Location: ../admin/admin.php");
		}
		
		echo "You have been banned until further notice";
		die();
		
		
	} else {
		echo "Incorrect Password";
	}