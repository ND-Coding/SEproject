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
  <div class="container row">
  	<div class="col-md-9"> container
  		
  		
  		<div class="jumbotron">
			  <h1>Welcome to the "Insret  company name here "</h1>
			  
						  
					  <p>Here at "insert name here", we help you find th car of your dreams</p>
					  <h2>Advisor </h2>
					  <h3>About</h3>
					  <p>-   details..</p>
					  
				  		<h2>What do we do :</h2>
				  		 <h3>details</h3>
					  		 <p>- </p>
						  		 
				</div>	
				<div>	 
				<div class= "col-md-6">
					<h2>If you do not have an Account, please register here</h2> 
			 
			  
			  <p><a class="btn btn-primary btn-lg " href="register.php">
									<i class="glyphicon glyphicon-plus"></i>
									Register
							</a></p>
				</div>	  		 
			  <div class= "col-md-6">
			  	
							<h2>Otherwise please login here..</h2> 
							<p><a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" data-toggle="modal" >
									<i class="glyphicon glyphicon-plus"></i>
									login/Admin login
							</a></p>
							
			  </div>
			 </div>
		</div>
  		
  		
  		
  		
  		
  	<div class="col-md-3">
  		<div class="container jumbotron"> AD</div>
  		<div class="container jumbotron"> AD</div>
  		

  	</div>
  	
  	
  	
  	
  	
  </div>
		
		
				<div class="modal fade" id="myModal"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i> Login</h4>
							      </div>
							      <div class="modal-body">
							      	<div class="col-md-5">
							      		<h2>Admin Login </h2>
							      		<p>Enter Pin</p>
							      		<form>
						          Pin <input type="text" name="Pin"/><br>
										<input type="submit" name="asubmit" id="asubmit" value="Submit" />
										<a class="btn-lg" href="admin.php">CUT TO admin(CUSTOMER)</a>
									</form>
								  	</div>
							      	<div class="col-md-2"><h2>OR </h2></div>
							      	<div class="col-md-5">
							      		<h2>Customer login</h2>
							      		<p>Enter login credentials</p>
							      		<form>
							    		Email :<input type="text" name="email"/><br>
							    
							           Password :<input type="text" name="password"/><br>
											<input type="submit" name="submit" id="submit" value="Submit" />
											<a class="btn-lg" href="user.php">CUT TO USER</a>
										</form>
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