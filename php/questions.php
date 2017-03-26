<?php
 
include("../php/config.php");
include("../php/db.php");
//if (post )
$active=  $_POST['active'];
$description = $_POST['question'];
$required= $_POST['required'];

$query = "INSERT INTO `question`(`active`, `description`, `required`) 
			VALUES ('$active','$description','$required')";

//if update
//$query = "UPDATE  `dallingn1_db`.`question` SET 'active'='$active' ,`description` =  '$?'
//, 'required'= '$required'  WHERE  `question`.`id` =$id;";

//if delete
//$query ="DELETE FROM `dallingn1_db`.`question` WHERE `question`.`id` = '$id';";

