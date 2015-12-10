<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include("php/config.php");
			include("includes/head.php");
			//include 'includes/head.php';	//tempfix		

		?>
	</head>


	<body>
		<?php
			include('includes/UserNavBar.php');			
		?>

		<div>
			<div class="container"> 
				View messages
				<table class="table table-hover">
					<thead>
						<tr>
						<th>message #</th>
						<th>User message log</th>
						<th>From</th>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>hi</td>
							<td>Client</td>
						</tr>
						<tr>
							<th>2</th>
							<td>hello</td>
							<th>User</th>
						</tr>
						<tr>
							<th>3</th>
							<td>thanks</td>
							<td>Client</td>
						</tr>
					</tbody>
				</table>
				<div class="container "style="center">
					<a class="btn btn-danger btn-lg " href="questionarie.php">Anwser Questionarie</a>
					<a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" data-toggle="modal" >Send message</a>
					<a class="btn-lg btn btn-warning toggle-modal add" data-target="#mydelete" data-toggle="modal" >Delete Account</a>
				</div>
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