<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
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
     
     
      <a class='dropdown-item' href='#$id'>$name</a>";
						}
      ?>
    </div>