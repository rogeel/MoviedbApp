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
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li  class="active"><a href="#">About</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</header>
			<div class="row">
				<h1 class="text-center">About MovieDB app</h1>
				<div class="colmd-12">
					<div class="col-md-8 col-md-offset-2">
						<div class="text-center">
							<h4>Moviedb app was developed with Codeigniter(php framework), Bootstrap(css framework) and Curl library for get the json object returned for the api.
							The app has responsive design, this enables view the app in any mobile device.<br><br>
							You can find any actor or movie and you can choose the actor and see the movies in he has starred</h4>
						</div>
					</div>
				</div>
				
			</div>
			

			
			<?php  $this->load->view('includes/footer'); ?>

			<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->
		</div>
		<?php  $this->load->view('includes/scripts'); ?>
	</body>
</html>