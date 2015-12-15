<?php
$content = $_POST['content'];



$query = "INSERT INTO `message`(`user_id`, `from_admin`, `content`)
 VALUES ($nid,1,$content)";

if(!$dbh->query($query)){
	var_dump( $dbh->errorinfo());
} else {	
	header("Location: ../admin/admin.php");
}