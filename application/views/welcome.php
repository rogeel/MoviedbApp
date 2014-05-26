<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Load css files -->
		<?php  $this->load->view('includes/css'); ?>
	</head>
	<body>
		<div id="container" class="container">
			<?php  $this->load->view('includes/header'); ?>
			<div class="row">
				<h1 class="text-center">Find any Actor or Movie</h1>
				<div class="colmd-12">
					<form class="form-horizontal" role="form" method="get" action="<?php base_url()?>index.php/actors">
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<input type="text" required class="form-control" id="inputEmail3" name="query" placeholder="Search for an actor or movie">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-2 text-center">
								<button type="submit" class="btn btn-default">Search</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php  $this->load->view('includes/footer'); ?>
			<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->
		</div>
		<!-- Load js files -->
		<?php  $this->load->view('includes/scripts'); ?>
	</body>
</html>