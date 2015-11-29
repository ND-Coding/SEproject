<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/Projects/SEProject/php/config.php");
	include(PHP_DIRECTORY . "db.php");
	
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
		header("Location: ../user.php");
	} else {
		echo "Incorrect Password";
	}