<!DOCTYPE html>
<html lang="en"> 
	<head>
		  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		  
		<meta charset="utf-8">
		<title>Insert company name here Beta</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="assets/css/docs.css" rel="stylesheet">
		<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../content/css/main.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		
	</head>

 
	<body>
		 <?php
    include 'UserNavBar.php';
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