<?php
function q_message($content, $user_id, $from_admin){
	$query = "INSERT INTO `dallingn1_db`.`message` (`id`, `user_id`, `from_admin`, `content`, `time_sent`) 
				VALUES (NULL, '$user_id', '$from_admin','$content', CURRENT_TIMESTAMP)";
	
	if(!$dbh->query($query)){
		var_dump( $dbh->errorinfo());
	}else {	
		;
	}
}




?>