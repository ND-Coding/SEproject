<!DOCTYPE html>
<html lang="en"> 
	<head>
		<?php
			include("php/config.php");				
			include("includes/head.php");		
		?>
	</head>
	<body>
		<?php
			include '../includes/UserNavBar.php';
			if($_SESSION['privilige'] != 2) {
			print "You are not authorized to view this content.";
			die();
		}
		include("../includes/AdminNavBar.php");
		?>
		<header><h1>Questionarie page </h1></header>
		<h2>Please anwser 3 out of 5 questions below:</h2>
		<form>
			<ul>
				<li> 
					<p>Question 1</p>
					<input type= "type" name="full name"/> <br>
				</li>
				<li> 
					<p>Question 2</p>
					<input type= "type" name="full name"/> <br>
				</li>
				<li> 
					<p>Question 3</p>
					<input type= "type" name="full name"/> <br>
				</li>
				<li> 
					<p>Question 4</p>
					<input type= "type" name="full name"/> <br>
				</li>
				<li> 
					<p>Question 5</p>
					<input type= "type" name="full name"/> <br>
				</li>
			</ul>
			<input type="submit" name="submit" id="submit" value="Submit" />
			<a class="btn-lg" href="user.php">CUT TO USER</a>
		</form>
	</body>
</html>