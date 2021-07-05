<?php
include_once('../controller/PostController.php');
?>

<!DOCTYPE html>
<html>
 <?php 
   include('../layout/head.php')
 ?>
<body style="background-color:white; color:black;">
<div class="container-fluid" style="padding:0px"  >
    <img src='../images/coronanav.png' width="100%" height="400px">
       <?php 
         include('../layout/nav.php')
       ?>
		<div class="row">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<th>#</th>
						<th>Publisher</th>
						<th>Subject</th>
						<th>Date</th>
					</thead>
					<tbody>
						<?php 
						$table = PostController::get_posts();
						echo $table->render();
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>