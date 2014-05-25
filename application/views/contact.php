<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php  $this->load->view('includes/css'); ?>
	</head>
	<body>
		<div id="container" class="container">
			<header>
				<div class="row">
					<h3 class="text-muted col-md-8">MovieDB App</h3>
					<div class="rmm col-md-4">
						<ul class="nav nav-pills ">
							<li ><a href="<?php echo base_url(); ?>">Home</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
							<li class="active"><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</header>
			<div class="row">
				<h1 class="text-center">Roger Alberto Perez Guerra</h1>
				<div class="colmd-12">
					<h4 class="text-center">roger.a.guerra@gmail.com</h4>
					<h4 class="text-center">+57 318 3590181</h4>
				</div>
			</div>
			<?php  $this->load->view('includes/footer'); ?>
			<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->
		</div>
		<?php  $this->load->view('includes/scripts'); ?>
	</body>
</html>