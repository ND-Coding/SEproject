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
		?>
<div class="col-md-8"> 
	<form>
				Edit Questions
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Question #</th>
							<th>Question Descriptions</th>
							<th>Required</th>
							<th>Change</th>
							
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
									<td><input type='text' name='' placeholder='$question' id='question[$id]'/></td>
								";
								if ($question['required'] === "1"){
									print "<td><input type='checkbox' checked = 'true' id='required[$id]'/></td>";
								} else {
									print "<td><input type='checkbox' id='required[$id]'/></td>";
								}
								if ($question['active'] === "1"){
									print "<td><input type='checkbox' checked = 'true' id='active[$id]'/></td>";
								} else {
									print "<td><input type='checkbox' id='active[$id]'/></td>";
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