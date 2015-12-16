<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include("php/config.php");
			include("includes/head.php");
			include("php/db.php");

			//include 'includes/head.php';	//tempfix		

		?>
	</head>


	<body>
		<?php
			include('includes/UserNavBar.php');	
			if($_SESSION['privilige'] > 2 || $_SESSION['privilige'] < 1) {
				print "You are not authorized to view this content.";
				die();
			}
			if($_SESSION['privilige'] === 1){
				include("../includes/AdminNavBar.php");
			}
		?>

		<div>
			<div class="container "style="center">
					<a class="btn btn-danger btn-lg " href="questionarie.php">Anwser Questionnaire</a>
					<a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" data-toggle="modal" >Send message</a>
					<a class="btn-lg btn btn-warning toggle-modal add" data-target="#mydelete" data-toggle="modal" >Delete Account</a>
				</div>
			<div class="container"> 
				
				View messages
				<table class="table table-hover">
					<thead>
						<tr>						
						<th>User message log</th>
						<th>From</th>
						<th>Time</th>
						</tr>
					</thead>
					<tbody>
						
						<?php
							$id = $_SESSION['id'];
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
								
								
								$time=$message['time_sent'];
								$id = $message['id'];
								$content = $message['content'];
								
								print "
									<tr class = $background>
										<td>$content</td>
										<td>$from</td>
										<td>$time</td>
									</tr>
								";
							}
						?>
						
					</tbody>
				</table>
				
			</div>
			<div class="container">
				<?php 
				include 'Umessage.php';
				
				?>
				
				
				
				
			</div>
			
		</div>		
		<div class="modal fade" id="myModal"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" style="text-align: center">
							<i class="glyphicon glyphicon-user"></i>Enter messgae
						</h4> 
					</div>
					<div class="modal-body">
						<body ng-app="myNoteApp" ng-controller="myNoteCtrl">
							<h2>My Message</h2>
							<textarea ng-model="message" cols="40" rows="10"></textarea>
							<p>
								<button ng-click="save()">Save</button>
								<button ng-click="clear()">Clear</button>
							</p>
							<p>
								Number of characters left: <span ng-bind="left()"></span>
							</p>
							<script src="myNoteApp.js"></script>
							<script src="myNoteCtrl.js"></script>
						</body>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
		<div class="modal fade" id="mydelete"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" style="text-align: center">
							<i class="glyphicon glyphicon-user"></i>Enter new car info
						</h4> 
					</div>
					<div class="modal-body">
						<body ng-app="myNoteApp" ng-controller="myNoteCtrl">
							<form>
							Pleases delete my account <a class="btn btn-warning">yes</a>
							</form>	
						</body>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->		
		<?php
			include("../includes/scripts.php");
		?>
		<script>
			$('#myModal').on('shown.bs.modal', function () {
				$('#myInput').focus()
			})
		</script>
	</body>
</html>