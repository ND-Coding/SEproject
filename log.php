<!DOCTYPE html>
<html lang="en"> 
	<head>
		<?php
			include($_SERVER['DOCUMENT_ROOT'] . "/Projects/SEProject/php/config.php");
			include(INCLUDES_DIRECTORY."head.php");
		?>
	</head>
	<body>
		<?php
			include 'AdminNavBar.php';
		?>
		
		<header>
			Comunication log page
		</header>
		<div class="row center">
			<div class="col-md-8">
				messages here......
			</div>
			<div class="col-md-4">
				<p>
					<a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" data-toggle="modal" >
						<i class="glyphicon glyphicon-plus"></i>
						Send Message
					</a>
				</p>
				<p>
					<a class="btn btn-primary btn-lg toggle-modal add" data-target="#car" data-toggle="modal" >
						<i class="glyphicon glyphicon-plus"></i>
						View Car database
					</a>
				</p>
			</div>
		</div>
		<div class="modal fade" id="car"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i> Send message</h4> 
					</div>
					<div class="modal-body">
						<body ng-app="myNoteApp" ng-controller="myNoteCtrl">
							<table class="table table-hover">
							<thead>
								<tr>
									<th>Car #</th>
									<th>Edit</th>
									<th>Car name</th>
									<th>Car type</th>
									<th>Min- max price</th>
									<th>Details</th>
									<th>link</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td><a></a></td>
									<td>toyota corolla</td>
									<td>compact</td>
									<td>$1650</td>
									<td>Great exterior</td>
								</tr>


							</tbody>

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
		<div class="modal fade" id="myModal"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i> Send message</h4> 
					</div>
					<div class="modal-body">
						<body ng-app="myNoteApp" ng-controller="myNoteCtrl">
							<h2>My Message</h2>
							<textarea ng-model="message" cols="40" rows="10"></textarea>
							<p>
								<button ng-click="save()">Save</button>
								<button ng-click="clear()">Clear</button>
							</p>
							<p>Number of characters left: <span ng-bind="left()"></span></p>
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
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
		<script>
			$('#myModal').on('shown.bs.modal', function () {
				$('#myInput').focus()
			})
		</script>
	</body>
</html>