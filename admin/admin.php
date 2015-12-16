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
        	
							
							<div class='row'>
							<div class='col-lg-8'>
							View messages
				<table class='table table-hover'>
					<thead>
						<tr>
						<th>User message log</th>
						<th>From</th>
						<th>time</th>
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
									$from = $name;
								}
								
								
								
								$date = $message['time_sent'];
								$content = $message['content'];
								
								print "
									<tr class = $background>										
										<td>$content</td>
										<td>$from</td>
										<td>$date</td>
									</tr>
								";
							}
						  
					print"
					</tbody>
				</table></div>
				<div class='col-lg-4'>
				<h3>message</h3>
				"; 
				$nid= $id;
				
								
								include 'message.php';
								
								
								
								print"
				
				</div>
				</div>
							<!--<hr />
							<a class='btn btn-primary btn-lg toggle-modal add' data-target='#Register' data-toggle='modal' >
							Send a Message $nameid
						</a>-->
													
						        	</div>
						        <div class='panel-footer'>
						        
						</div>
						      </div>
						    </div>
							
							";
						}
							
			      	?>
        	
        	
        	
  
</div>
</div>
    <div class="modal fade" id="Register"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i>Register</h4> 
					</div>
					<div class="modal-body">
						<h1>Enter Message</h1>
						<div class="row">
							
							<div class="col-lg-12">
								<?php
									print"$id  $nameid $nid";
								?>
								<hr />
								<form action="../php/ADmessage.php " method="post">
									<?php 
									include"message.php";
									?>
								</form>	
							</div>
							<div class="col-lg-12">
								<hr />
													
									car info below....
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Car name</th>
												<th>Link</th>
												<th>Description</th>
												
										</thead>
										<tbody>
											
											<?php
											
											
												$query = "SELECT * FROM car WHERE 1 ";
												$stm = $dbh->query($query);
												$results = $stm->fetchAll();
												
												foreach ($results as $car) {
													$carname = $car['name'];
													$carlink = $car['link'];
													$cardescription = $car['description'];
													print "
													<tr class= 'row'>													
														<td>$carname</td>									
														<td><a href='$carlink' target ='_blank'>$carlink</a</td>												
														<td>$cardescription</td>
																											
													";
													
													
												}
											?>
											
											
										</tbody>
										
										
										
										
										
									</table>
				
								
								
							</div>
							
							
								
							
			
							
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-dialog -->
		</div>
		<?php
			include("../includes/scripts.php");
		?>
		<script>
			$('#myModal').on('shown.bs.modal', function () {
				$('#myInput').focus()
			})
			$('#Register').on('shown.bs.modal', function () {
				$('#myInput').focus()
			})
		</script>
 
</body>
<script>
	$('.collapse').collapse()
</script>

</html>