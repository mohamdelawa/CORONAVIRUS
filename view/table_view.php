<?php
include_once('../controller/PostController.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
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