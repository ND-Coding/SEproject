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
		<style>
			.hideme
		{
		    opacity:0;
		}
		.affix {
	       top: 50px;
	       right: 0px;
	      text-align: right;
	  }
			
			
		</style>

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
									WHERE  privilige !=1 and id != $userid
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
						          <a onClick='history.go(0)' >$name</a>
						        </h4>
						      </div>
						      <div >
						        <div class='panel-body'>
        	
							
							<div >
							<div class='col-xs-6'>
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
									$csize="'col-xs-2";
									$fsize="'col-xs-4";
									$cwd="'width:25%'";
									$fwd="'width:75%'";
									print "
									<div class = 'row '>
									<div class ='col-xs-12'>										
										<div class= $csize $background style=$cwd>$content</div>
										<div class= $fsize $fback style=$fwd >$from</div>
									</div>	
									</div>
								";
									
								} 
								elseif ($message['To']== $userid && $message['from_admin'] == 0 && $message['user_id']==$id){
									$background = "bg-danger'";
									$fback="'";
									$from = "$name said: 
									$content";
									$content = $date;
									$csize="'col-xs-2";
									$fsize="'col-xs-4";
									$cwd="'width:25%'";
									$fwd="'width:75%'";
									print "
									<div class = 'row '>			
											<div class ='col-xs-12'>				
										<div class= $csize $background style=$cwd>$content</div>
										<div class= $fsize $fback style=$fwd >$from</div>
										</div>
									</div>
								";
																		
								}
								
								
								elseif($message['To']==$id   && $message['from_admin'] == 0 && $message['user_id']==$userid) {
									$background = "'";
									$fback="bg-success'";
									$from = $date;
									$content= "You said: 
									$content";
									$csize="'col-xs-4";
									$fsize="'col-xs-2";
									$cwd="'width:75%'";
									$fwd="'width:25%'";
									print "
									<div class = 'row '>	
									<div class ='col-xs-12'>										
										<div class= $csize $background style=$cwd>$content</div>
										<div class= $fsize $fback style=$fwd >$from</div>
										</div>
									</div>
								";
								}
								
								
								
								
								
								
								
							}
						  
					print"
					</div>
				</div></div>
				<div class='col-xs-2'>
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

<div class='col-xs-2'>
		<nav class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="100" style="text-align: right; margin: right;">
			<h1> Users on PM:</h1> 
		<ul class="nav bs-doc-slidenav "> 
				 <?php
    
     $query = "SELECT *
									FROM  user 
									WHERE  privilige !=1 and id != $userid
									";
						$stm = $dbh->query($query);
						$results = $stm->fetchAll();
						
						
						foreach ($results as $user) {
							$id = $user['id'];
							$name= $user['name'];
							
							print"
     
     
     <li > <a class='btn'  href='#$id'><i class='glyphicon glyphicon-user'></i>$name<span class='sr-only'></a></li >";
						}
      ?>
      </ul>
				</nav>
				
			
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
		
	
	$('.carousel').carousel({
  interval: 5000
   
})

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this)
                .animate({'opacity':'1'},500)    
                ;
                    
            }
            
        }); 
    
    });
    
});
	
	$('.collapse').collapse()
</script>
	</body>
</html>