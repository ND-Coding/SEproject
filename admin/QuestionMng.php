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
		include("../includes/AdminNavBar.php");
		if($_SESSION['privilige'] != 1) {
			print "You are not authorized to view this content.";
			die();
		}
			
		if(isset($_POST['submit'])){
			$query_ids = "SELECT id FROM questions";
			$stm = $dbh->query($query_ids);
			$question_ids = $stm->fetchAll();
			
			print_r($_POST);
		}
		?>		
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
							}
						?>
					</tbody>
					<button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Changes</button>					
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