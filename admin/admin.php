<!DOCTYPE html>
<html lang="en"> 
<head>
	<?php
		include("../php/config.php");
		include '../includes/head.php';	
	?>
</head>
<body>	
	<?php
		include("../includes/AdminNavBar.php");
	?>
	<div>
		<div class="container">
			List of users
			<table class="table table-hover">
				<thead>
					<tr>
					<th>User #</th>
					<th>User name</th>
					<th>User message log</th>
					<th>Recent message time</th>
					<th>Satified</th>
				</thead>
				<tbody>
					<tr>
						<th>1</th>
						<td>Tom</td>
						<td><a class="btn btn-lg" href="log.php">Check Communication log</a></td>
						<td>hi</td>
						<td>no</td>
					</tr>
					<tr>
						<th>2</th>
						<td>Jared</td>
						<td><a class="btn btn-lg" href="log.php">Check Communication log</a></td>
						<td>thanks</td>
						<td>yes</td>
					</tr>
					<tr>
						<th>3</th>
						<td>Sally</td>
						<td><a class="btn btn-lg" href="log.php">Check Communication log</a></td>
						<td>no i dont like hondas</td>
						<td>no</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>