<?php

include("config.php");
include("db.php");

$name = $_POST['full_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$privilige = 2;

$query = "INSERT INTO `user`(`email`, `name`, `password`, `privilige`) 
			VALUES ('$email','$name','$password','$privilige')";

if(!$dbh->query($query)){
	var_dump( $dbh->errorinfo());
} else {
	if(isset($_SESSION['user'])){
		session_destroy();
		session_start();
	}
	$_SESSION['user'] = $email;
	$_SESSION['privilige'] = $privilige;
	$_SESSION['name'] = $name;
	header("Location: ../user.php");
}

