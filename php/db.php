<?php
	try{		
		$dbh = new PDO('mysql:host=localhost;dbname=dallingn1_db',
					   "dallingn1",
					   "s844325");
	} catch (PDOException $e) {
		print "Error:" . $e->getMessage() . "</br>";
		die();
	}
	