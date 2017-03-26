<?php
include("../php/config.php");
include("../php/db.php");

$content = $_POST['content'];
$id = $_SESSION['id'];
$nid= $_POST['nid'];

$query = "INSERT INTO `message` (`id`, `user_id`, `from_admin`, `content`, `time_sent`,`To`) 
VALUES (NULL, '$id', '0','$content', CURRENT_TIMESTAMP,'$nid')";



if(!$dbh->query($query)){
	var_dump( $dbh->errorinfo());
}else {	
								
	header("Location: ../user.php");
}