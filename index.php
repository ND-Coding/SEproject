<!DOCTYPE html>
<html lang="en"> 
	<head>
		<?php
			include("php/config.php");				
			include("includes/head.php");	
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
					<a class="navbar-brand" href="../projects/index.php">PirvateM.com</a>					
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">						
						<?php
							if ($_SESSION['privilige'] === 1) {
								print "<li><a href=\"/admin/admin.php\">Admin</a></li>";
							}													
						?>
					</ul>
					<a class="nav navbar-nav navbar-right" href="php/logout.php"> Log Out </a>
				</div><!-- /.navbar-collapse -->
			</div>
			<div class="col-md-9"> 
				<div class="jumbotron">
					<h1>Welcome to thePirvateM.com</h1>
					<p>Here at PirvateM.com, we help you chat busness or pleasure</p>
					<h2>What we do :</h2>
					<h4>chat with any one on the net work whenever</h4>
					<br />
					<p>Chats are suppervised by an admin so please dont abuse this network</p>
				</div>	
				<div>	 
					<div class= "col-md-6">
					<h2>If you do not have an Account, please register here</h2>
					<p>
						<form action="php/register.php" method="post">
						<?php 
								include 'register.php';
							?>
						</form>
					</p>
					</div>	  		 
					<div class= "col-md-6">
						<div>
						<h2>Login</h2>
						<p>Enter login credentials</p>
						<form action="php/login.php" method="post">
							Email :<input type="text" id="email" name="email"/><br>
							Password :<input type="password" id="password" name="password"/><br>
							<input type="submit" name="submit" id="submit" value="Submit" />
						</form>
					</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="jumbotron"> AD Space</div>
				<div class="jumbotron"> AD Space</div>
				<div class="jumbotron"> AD Space</div>
				<div class="jumbotron"> AD Space</div>
				<div class="jumbotron"> AD Space</div>
				<div class="jumbotron"> AD Space</div>
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
							Password :<input type="password" id="password" name="password"/><br>
							<input type="submit" name="submit" id="submit" value="Submit" />
							
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>
		
		<?php
			include("includes/scripts.php");
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