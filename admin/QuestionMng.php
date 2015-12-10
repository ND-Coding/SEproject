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
						<!--
						<tr>
							<th>1</th>
							<td><input type="text" name="Question 1 :....." placeholder="Question 1" /></td>
							<td><input type="checkbox" id="required"/></td>
							<td><input type="submit" /></td>
							
							
						</tr>
						<tr>
							<th>2</th>
							<td><input type="text" name="Question 2: ....." placeholder="Question 2" /></td>
							<td><input type="checkbox" id="required"/></td>
							<td><input type="submit" /></td>
							
						</tr>
						<tr>
							<th>3</th>
							<td><input type="text" name="Question 3:....." placeholder="Question 3" /></td>
							<td><input type="checkbox" id="required"/></td>
							<td><input type="submit" /></td>
							
						</tr>
						-->
						<?php
							$query = "SELECT * FROM question WHERE active = 1";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach ($results as $question) {
								$id = $question['id'];
								$name = $question['description'];
								print "
								<tr>
									<th>$id</th>
									<td><input type='text' name='' placeholder='$name' /></td>
								";
								if ($question['required'] === "1"){
									print "<td><input type='checkbox' checked = 'true' id='required'/></td>";
								} else {
									print "<td><input type='checkbox' id='required'/></td>";
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