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
		<div class="container">
    <p class="navbar-text navbar-center"><a href="home.php" class="navbar-link"> BACK HOME</a></p>
  </div>
		<header>
	
	Comunication log page
	
</header>
		<div class="row center">
			
			<div class="col-md-8">
				
				messages here......
			</div>
			<div class="col-md-4">
		<p><a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" data-toggle="modal" >
									<i class="glyphicon glyphicon-plus"></i>
									Send Message
							</a></p>
		</div>
		</div>
		
		
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