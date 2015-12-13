<!DOCTYPE html>
<html lang="en"> 
<head>
	 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<?php
		include("../php/config.php");
		include '../includes/head.php';	
	?>
</head>
<body>	
	
	<?php	
	
		include("../php/db.php");			
		
		if($_SESSION['privilige'] != 1) {
			print "You are not authorized to view this content.";
			die();
		}
		include("../includes/AdminNavBar.php");
	?>
	
		<div class="container">
			<h1> users</h1> 
			<h2>Collapsible Panel</h2>
  					<div class="panel-group">
						<?php 
					
										
						$query = "SELECT *
									FROM  user 
									WHERE  privilige !=1
									";
						$stm = $dbh->query($query);
						$results = $stm->fetchAll();
						
						
						foreach ($results as $user) {
							$id = $user['id'];
							$name= $user['name'];
							$nameid= $id;
							print"
							 <div class='panel panel-default'>
						      <div class='panel-heading'>
						        <h4 class='panel-title'>
						          <a data-toggle='collapse' href='#collapse$nameid'>$name</a>
						        </h4>
						      </div>
						      <div id='collapse$nameid' class='panel-collapse collapse'>
						        <div class='panel-body'>
        	
							
							
							
							View messages
				<table class='table table-hover'>
					<thead>
						<tr>
						<th>message #</th>
						<th>User message log</th>
						<th>From</th>
					</thead>
					<tbody>
						";
						
					
							$query = "SELECT * FROM message WHERE user_id = $id";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach($results as $message){
								if ($message['from_admin'] == 1){
									$background = "'bg-warning'";
									$from = "Admin";
								} else {
									$background = "'bg-success'";
									$from = $_SESSION['name'];
								}
								
								
								
								$id = $message['id'];
								$content = $message['content'];
								
								print "
									<tr class = $background>
										<th>$id</th>
										<td>$content</td>
										<td>$from</td>
									</tr>
								";
							}
						
					print"
					</tbody>
				</table>
							
							
													
						        	</div>
						        <div class='panel-footer'>SEND MESSAGE</div>
						      </div>
						    </div>
							
							";
						}
							
			      	?>
      	
    
  
    
        	
        	
        	
        	
        	
        	
  
</div>
    
 
</body>
<script>
	$('.collapse').collapse()
</script>

</html>