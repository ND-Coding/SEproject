<?php
	try{		
		$dbh = new PDO('mysql:host=localhost;dbname=seprojectdb',
					   "root",
					   "");
	} catch (PDOException $e) {
		print "Error:" . $e->getMessage() . "</br>";
		die();
	}
	