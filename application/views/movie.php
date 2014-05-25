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
			<?php  $this->load->view('includes/header'); ?>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">
						<?php echo $movie['original_title'];?>
					</a>
				</li>
			 	<li class="search pull-right">
				  	<form class="form-inline" role="form" method="get" action="<?php echo base_url()?>index.php/movies">
						<input type="text" required class="form-control" id="inputEmail3" name="query" placeholder="Search for a movie...">
					</form>
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="content actorinfo">
						<div class="col-md-3">
							<?php if ($movie['poster_path']): ?>
								<img src="<?php echo $config['images']['base_url'].$config['images']['poster_sizes'][3].$movie['poster_path']; ?>" class='img-responsive' alt="<?php echo $movie['original_title']; ?>" title="<?php echo $movie['original_title']; ?>">
							<?php else: ?>
								<img src="https://d3a8mw37cqal2z.cloudfront.net/assets/e7e54489e81e8eb1/images/no-profile-w185.jpg" class='img-responsive' alt="">
							<?php endif; ?>
						</div>
						<div class="col-md-8">
							<h2><small>Overview</small></h2>
							<div class="text-justify">
								<?php echo $movie['overview']; ?>
							</div>
							<h3><small>Release Date</small></h3>
							<div class="text-justify">
								<?php echo $movie['release_date']; ?>
							</div>
							<h3><small>Production Companies</small></h3>
							<ul>
								<?php foreach ($movie['production_companies'] as $key => $company): ?>
									<li><?php echo $company['name'] ?></li>
								<?php endforeach ?>
							</ul>
							<h3><small>Rating</small></h3>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $movie['vote_average']*10; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $movie['vote_average']*10; ?>%;">
							    <?php echo $movie['vote_average']; ?> from <?php echo $movie['vote_count'] ?> votes
							  </div>
							</div>
								
						</div>

						

			
			
					
					<?php //print_r( $config['images']['base_url']); ?>
					<?php //print_r( $config['images']) ?>
					<?php //print_r($config['images']['poster_sizes'][2]); ?>
					</div>
				</div>
			</div>

			
			<?php  $this->load->view('includes/footer'); ?>
		</div>
		<?php  $this->load->view('includes/scripts'); ?>

	</body>
</html>