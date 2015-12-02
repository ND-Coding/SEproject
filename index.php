<!DOCTYPE html>
<html lang="en"> 
	<head>
		<?php
			include($_SERVER['DOCUMENT_ROOT'] . "/Projects/SEProject/php/config.php");
			include($INCLUDES_DIRECTORY."/head.php");	
			//tempfix
				include 'includes/head.php';	
			
		?>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Company</a>					
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">						
						<?php
							if($_SESSION['privilige'] === 1) {
								print "<li><a href=\"/admin/admin.php\">Admin</a></li>";
							}
						?>
					</ul>
					<a class="nav navbar-nav navbar-right" href="/"> Log Out </a>
				</div><!-- /.navbar-collapse -->
			</div>
			<div class="col-md-9"> 
				<div class="jumbotron">
					<h1>Welcome to the "Insert  company name here "</h1>
					<p>Here at "insert name here", we help you find th car of your dreams</p>
					<h2>Advisor </h2>
					<h3>About</h3>
					<p>-details..</p>
					<h2>What do we do :</h2>
					<h3>details</h3>
					<p>- </p>
				</div>	
				<div>	 
					<div class= "col-md-6">
					<h2>If you do not have an Account, please register here</h2>
					<p>
						<a class="btn btn-primary btn-lg toggle-modal add" data-target="#Register" data-toggle="modal" >
							<i class="glyphicon glyphicon-plus"></i>
							Register
						</a>
					</p>
					</div>	  		 
					<div class= "col-md-6">
						<h2>Otherwise please login here..</h2> 
						<p>
							<a class="btn btn-primary btn-lg toggle-modal add" data-target="#myModal" data-toggle="modal" >
							<i class="glyphicon glyphicon-plus"></i>
							login/Admin login
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="jumbotron"> AD</div>
				<div class="jumbotron"> AD</div>
				<div class="jumbotron"> AD</div>
				<div class="jumbotron"> AD</div>
				<div class="jumbotron"> AD</div>
				<div class="jumbotron"> AD</div>
			</div>
		</div>
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" style="text-align: center">
						<i class="glyphicon glyphicon-user"></i> Login
					</h4>
				</div>
				<div class="modal-body">					
					<div>
						<h2>Login</h2>
						<p>Enter login credentials</p>
						<form action="php/login.php" method="post">
							Email :<input type="text" id="email" name="email"/><br>
							Password :<input type="text" id="password" name="password"/><br>
							<input type="submit" name="submit" id="submit" value="Submit" />
							<a class="btn-lg" href="user.php">CUT TO USER</a>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="Register"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i>Register</h4> 
					</div>
					<div class="modal-body">
						<form>
							<?php 
								include 'register.php';
							?>
						</form>	
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-dialog -->
		</div>
		<?php
			include(INCLUDES_DIRECTORY."scripts.php");
			include 'includes/scripts.php';
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
</html>