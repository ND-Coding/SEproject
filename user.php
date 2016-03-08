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
			
			<div class="container row"style="center">
				
			<div class="col-xs-10"style="center">
			<h2>User Log</h2>
  					<div class="panel-group">
						<?php 
					
						$user= $_SESSION['name']; 
						$userid= $_SESSION['id'];	
						print"
						Account Name = $user
						  
						Account Id = $userid
						";
						$query = "SELECT *
									FROM  user 
									WHERE  privilige !=1
									";
						$stm = $dbh->query($query);
						$results = $stm->fetchAll();
						
						
						foreach ($results as $user) {
							$id = $user['id'];
							$name= $user['name'];
							
							print"
							 <div class='panel panel-default' id='$id'>
						      <div class='panel-heading'>
						        <h4 class='panel-title'>
						          <a >$name</a>
						        </h4>
						      </div>
						      <div >
						        <div class='panel-body'>
        	
							
							<div >
							<div class='col-sm-6'>
							View messages
				<div style='height: 300px; overflow: scroll;'>
					
					<div >
						";
						
					
							$query = "SELECT * FROM message WHERE user_id = $id
							OR  `user_id` =$userid";
							$stm = $dbh->query($query);
							$results = $stm->fetchAll();
							
							foreach($results as $message){
								$date = $message['time_sent'];
								$content = $message['content'];
								
								if ($message['from_admin'] == 1){
									$background = "bg-warning'";
									$fback="'";
									$from = "Admin said:
									 $content";
									$content= $date;
									$csize="'col-sm-2";
									$fsize="'col-sm-4";
									$cwd="'width:25%'";
									$fwd="'width:75%'";
									print "
									<div class = 'row '>										
										<div class= $csize $background style=$cwd>$content</div>
										<div class= $fsize $fback style=$fwd >$from</div>
										
									</div>
								";
									
								} 
								elseif ($message['To']== $userid && $message['from_admin'] == 0 && $message['user_id']==$id){
									$background = "bg-danger'";
									$fback="'";
									$from = "$name said: 
									$content";
									$content = $date;
									$csize="'col-sm-2";
									$fsize="'col-sm-4";
									$cwd="'width:25%'";
									$fwd="'width:75%'";
									print "
									<div class = 'row '>			
														
										<div class= $csize $background style=$cwd>$content</div>
										<div class= $fsize $fback style=$fwd >$from</div>
										
									</div>
								";
																		
								}
								
								
								elseif($message['To']==$id   && $message['from_admin'] == 0 && $message['user_id']==$userid) {
									$background = "'";
									$fback="bg-success'";
									$from = $date;
									$content= "You said: 
									$content";
									$csize="'col-sm-4";
									$fsize="'col-sm-2";
									$cwd="'width:75%'";
									$fwd="'width:25%'";
									print "
									<div class = 'row '>										
										<div class= $csize $background style=$cwd>$content</div>
										<div class= $fsize $fback style=$fwd >$from</div>
										
									</div>
								";
								}
								
								
								
								
								
								
								
							}
						  
					print"
					</div>
				</div></div>
				<div class='col-sm-2'>
				<h3>message</h3
				<form action='php/USmessage.php'method='post'>
				"; 
				
			
							$nid= $id;	
								include 'Umessage.php';
								print"</form>
				
				</div>
				</div>
				
													
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

<div class='col-xs-2'style="center" class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="1100" style="text-align: center;">
			<h1> Users on PM:</h1> 
			<div class="container col-xs-2">
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
							
							print"
     
     
      <a class='btn col-xs-2' href='#$id'><i class='glyphicon glyphicon-user'></i>$name<span class='sr-only'></a>";
						}
      ?>
				
				
			</div>
			</div>
</div>
			
				
				
			
			
		</div>			
		<?php
			include("../includes/scripts.php");
		?>
		<script>
			$('#myModal').on('shown.bs.modal', function () {
				$('#myInput').focus()
			})
		</script>
		<script>
	$('.collapse').collapse()
</script>
	</body>
</html>