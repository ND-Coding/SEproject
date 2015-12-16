<?php
include("../php/config.php");
include("../php/db.php");
$content = $_POST['content'];
$nid = $_POST['nid'];
//print"$nid";


//INSERT INTO `dallingn1_db`.`message` (`id`, `user_id`, `from_admin`, `content`, `time_sent`) 
//VALUES (NULL, $nid, 1, $content, CURRENT_TIMESTAMP)
$query = "INSERT INTO `dallingn1_db`.`message` (`id`, `user_id`, `from_admin`, `content`, `time_sent`) 
VALUES (NULL, '$nid', '1','$content', CURRENT_TIMESTAMP)";

if(!$dbh->query($query)){
	var_dump( $dbh->errorinfo());
}else {	
								
	header("Location: ../admin/admin.php");
}