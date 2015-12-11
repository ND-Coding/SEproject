<!DOCTYPE html>
<html> 
	<head>
		
		<?php
			include("../php/config.php");
			include("../php/db.php");			
			include("../includes/head.php");
		?>
		
	<body>
			
		<?php
<<<<<<< HEAD
		include("../includes/AdminNavBar.php");
		if($_SESSION['privilige'] != 1) {
		print "You are not authorized to view this content.";
		die();
		}
		include("../includes/AdminNavBar.php");
=======
			include("../includes/AdminNavBar.php");
<<<<<<< HEAD
			
			
			if(isset($_POST['submit'])){
				
			}
		?>		
=======
>>>>>>> origin/ver_two
		?>
>>>>>>> origin/ver_two
<div class="col-md-8"> 
	<form action=<?= $_SERVER['SCRIPT_FILENAME']?> method="post">
				Edit Questions
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Question #</th>
							<th>Question Descriptions</th>
							<th>Required</th>
							<th>Active</th>
							
					</thead>
					<tbody>
						<?php
							$query = "SELECT * FROM question WHERE active = 1";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach ($results as $question) {
								$id = $question['id'];
								$question = $question['description'];
								print "
								<tr>
									<th>$id</th>
									<td><input type='text' placeholder='$question' name='question[$id]'/></td>
								";
								if ($question['required'] === "1"){
									print "<td><input type='checkbox' checked = 'true' name='required[$id]'/></td>";
								} else {
									print "<td><input type='checkbox' name='required[$id]'/></td>";
								}
								if ($question['active'] === "1"){
									print "<td><input type='checkbox' checked = 'true' name='active[$id]'/></td>";
								} else {
									print "<td><input type='checkbox' name='active[$id]'/></td>";
								}
								print "	
									<td><input type='submit' /></td>
									</tr>
								";
								
							}
						?>
					</tbody>
					
					
		</form>
					
					
					
					
				</table>
				
				
				
				</div>


	</body>
	<footer>
		
		
	</footer>
	
	<?php
			include("../includes/scripts.php");
		?>
	
</html>