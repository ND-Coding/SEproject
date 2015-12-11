<!DOCTYPE html>
<html lang="en"> 
	<head>
		<?php
			
			include("php/config.php");

			
			
			include("php/db.php");			
			
			include("includes/head.php");
			
			
		?>
	</head>
	<body>
		<?php
			include 'includes/UserNavBar.php';
			if($_SESSION['privilige'] != 2 ) {
				print "You are not authorized to view this content.";
				die();
			}
		?>
		<div class="container">
		<header><h1>Questionarie page </h1></header>
		<h2>Please anwser 3 out of 5 questions below:</h2>
		<form>
			<table class="table table-hover">
					<thead>
						<tr>
							<th>Question #</th>
							<th>Question Descriptions</th>
							<th>Answer</th>
						</tr>
					</thead>
					<tbody>
			<?php
						
						print"<h3>REQUIRED Queations (User must awnser these questions)</h3>";
							$query = "SELECT * 
									FROM  `question` 
									WHERE  `required` =1 &&  `active` =1";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach ($results as $question) {
								$id = $question['id'];
								$require = $question['required'];
								$description= $question['description'];
								print "
								<tr style=' background-color: 	#FA8072;'>
									<th >$id</th>
									<td >$description</td>
									<td><input type='text' id ='$id' name='anwser'/></td>
								";
								
								
							}
							
							$query = "SELECT * 
									FROM  `question` 
									WHERE  `required` =0 &&  `active` =1";
									$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
									foreach ($results as $question) {
								$id = $question['id'];
								$description= $question['description'];
								print "
								<tr >
									<th class='col-xs-12 col-sm-1'>$id</th>
									<td class='col-xs-12 col-sm-5'>$description</td>
									<td><input type='text' id ='$id' name='anwser'/></td>
								
								";
								
								
							}
						?>
						
					</tbody></table>
			<input type="submit" name="submit" id="submit" value="Submit" />			
		</form>
		</div>
	</body>
</html>