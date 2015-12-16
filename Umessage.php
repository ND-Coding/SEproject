<form action="" method="post">
		Message : <?php 
		
		$id= $_SESSION['id'];
		print" $id ";
		?> <br>
		<textarea type="type" name="content" cols="40" rows="10"></textarea>
		<input type="submit" name="submit" id="submit" value="Submit" />								
	</form>	
		<?php
include("/~dallingn1/2014fall/projects/php/config.php");
include("/~dallingn1/2014fall/projects/php/db.php");
$content = $_POST['content'];
$id = $_SESSION['id'];
//print"$nid";


//INSERT INTO `dallingn1_db`.`message` (`id`, `user_id`, `from_admin`, `content`, `time_sent`) 
//VALUES (NULL, $nid, 1, $content, CURRENT_TIMESTAMP)
$query = "INSERT INTO `dallingn1_db`.`message` (`id`, `user_id`, `from_admin`, `content`, `time_sent`) 
VALUES (NULL, '$id', '0','$content', CURRENT_TIMESTAMP)";

if(!$dbh->query($query)){
	var_dump( $dbh->errorinfo());
}else {	
								
	header("Location: /~dallingn1/2014fall/projects/user.php");
}?>