<!DOCTYPE html>
<html> 
	<head>
		<?php
	
		include("../includes/AdminNavBar.php");
		include("../php/config.php");
		include("../php/db.php");			
		include("../includes/head.php");
		if($_SESSION['privilige'] != 1) {
		print "You are not authorized to view this content.";
		die();
		}
		
	?>
		
	</head>
	
	<body>
		
		
		
		<div class="container">
			<div class="col-md-6">
				User list
				<table class="table table-hover">
					<thead>
						<tr>
							<th>User id</th>
							<th>Email</th>
							
							<th>Description</th>
						
					</thead>
					<tbody>
						<?php
						
						
							$query = "SELECT * FROM `user` WHERE `privilige`= 2";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach ($results as $user) {
								$id = $user['id'];
								$name = $user['name'];
								
								print "
								<tr>
									<th>$id</th>
									<td>$name</td>
									<td><a class='btn btn-danger btn-lg toggle-modal add' data-target='#myModal' data-toggle='modal' >
									<i class='glyphicon glyphicon-plus'></i>
									Ban
							</a></td>
								";
								
								
							}
						?>
						
						
						
						
						
						
					</tbody>
					
					
					
					
					
				</table>
				
				
				
				
				</div>
			<div class="col-md-6">
				Banned list(if empty noone has been banned)
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Car #</th>
							<th>Car name</th>
							<th>Description</th>
							<th>Link</th>
							<th>Edit</th>
					</thead>
					<tbody>
						<?php
						
						
							$query = "SELECT  `id` ,  `name` ,  `privilige` FROM  `user` WHERE  `privilige` =0";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach ($results as $user) {
								$id = $user['id'];
								$name = $user['name'];
								
								print "
								<tr>
									<th>$id</th>
									<td>$name</td>
									<td><a class='btn btn-danger btn-lg toggle-modal add' data-target='#myModal' data-toggle='modal' >
									<i class='glyphicon glyphicon-plus'></i>
									 UN- Ban
							</a></td>
								";
								
								
							}
						?>
						
						
						
						
						
						
					</tbody>
					
					
					
					
					
				</table>
				
				
				
				
			</div>
				
				
			</div>
	</body>
	<footer>
	</footer>
	<script>
		<div class="modal fade" id="myModal"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i> Send message</h4> 
					</div>
					<div class="modal-body">
						<body ng-app="myNoteApp" ng-controller="myNoteCtrl">
							<form>
							</form>
							Delete<input type="text " />from further communicatioons <a class="btn btn-primary btn-lg" >yes</a>
						</body>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
		<script>
			$('#myModal').on('shown.bs.modal', function () {
				$('#myInput').focus()
			})
		</script>
	</script>

</html>