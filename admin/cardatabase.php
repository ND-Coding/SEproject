<!DOCTYPE html> 
<html lang="en">
	<head>
		  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		  
		<meta charset="utf-8">
		<title>Insert company name here Beta</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="assets/css/docs.css" rel="stylesheet">
		<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../content/css/main.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			
 
	</head>

 
	<body>
	
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
			<div class="container">
				car info below....
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Car #</th>
							<th>Car name</th>
							<th>Link</th>
							<th>Description</th>
							<th>Edit</th>
					</thead>
					<tbody>
						<!--<tr>
							<th>1</th>
							<td><a></a></td>
							<td>toyota corolla</td>
							<td>compact</td>
							<td>$1650</td>
							<td>Great exterior</td>
						</tr>-->
						
						
						<?php
						
						
							$query = "SELECT * FROM car WHERE 1 ";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach ($results as $car) {
								$id = $car['id'];
								$name = $car['name'];
								$link = $car['link'];
								$description = $car['description'];
								print "
								<tr>
									<th class='col-xs-12 col-sm-1'>$id</th>
									<td class='col-xs-12 col-sm-2'>$name</td>									
									<td class='col-xs-12 col-sm-2'><a class='btn btn-default' href='$link' target='_blank' role='button'>Link</a></td>
									
									<td class='col-xs-12 col-sm-5'>$description</td>
									<td class='col-xs-12 col-sm-2'><a class='btn btn-primary btn-sm toggle-modal add' data-target='#myModal' data-toggle='modal' >
									<i class='glyphicon glyphicon-plus'></i>
									edit car info
							</a></td>
								";
								
								
							}
						?>
						
						
						
						
						
						
					</tbody>
					
					
					
					
					
				</table>
				
			</div>
			
			<div class="container">
		<p><a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" data-toggle="modal" >
									<i class="glyphicon glyphicon-plus"></i>
									Enter car info
							</a></p>
		</div>
			
			
		</div>
			<div class="modal fade" id="myModal"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i>Enter new car info</h4> 
							      </div>
							      <div class="modal-body">
							      	
							      	
									<body ng-app="myNoteApp" ng-controller="myNoteCtrl">
									<form>
									Car Name: <input type= "type" name="name"/> <br>
									Car type : <input type= "type" name="type"/> <br>
									Car price range<input type= "type" name="max"/> to <input type= "type" name="max"/> <br>
									<h2>My Note</h2>
									
									
									<textarea ng-model="message" cols="40" rows="10"></textarea>
									
									<p>
									<button ng-click="save()">Save</button>
									<button ng-click="clear()">Clear</button>
									</p>
									
									<p>Number of characters left: <span ng-bind="left()"></span></p>
									
									<script src="myNoteApp.js"></script>
									<script src="myNoteCtrl.js"></script>
									</form>	
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
		
	
	</body>
	</html>