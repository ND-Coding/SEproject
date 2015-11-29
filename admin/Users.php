<!DOCTYPE html>
<html> 
	<head>
		<?php
			include($_SERVER['DOCUMENT_ROOT'] . "/Projects/SEProject/php/config.php");
			include(INCLUDES_DIRECTORY."head.php");
		?>
	</head>
	<?php
		include(INCLUDES_DIRECTORY.'/AdminNavBar.php');
	?>
	<body>
	</body>
	<footer>
	</footer>
	<script>
		<div class="modal fade" id="myModal"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" style="text-align: center"> <i class="glyphicon glyphicon-user"></i> Send message</h4> 
					</div>
					<div class="modal-body">
						<body ng-app="myNoteApp" ng-controller="myNoteCtrl">
							<form>
							</form>
							Delete<input type="text " />from further communicatioons <a class="btn btn-primary btn-lg" >yes</a>
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
	</script>

</html>