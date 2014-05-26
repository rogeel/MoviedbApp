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
						Actor: <?php echo $info['name']; ?>
						<span class="badge"><?php echo count($credits) ?></span>
					</a>
				</li>
			 	<li class="search pull-right">
				  	<form class="form-inline" role="form" method="get" action="<?php echo base_url()?>index.php/actors">
						<input type="text" required class="form-control" id="inputEmail3" name="query" placeholder="Search for an actor...">
					</form>
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="content actorinfo">
						<div class="col-md-3">
						<!-- Actor Image -->
							<?php if ($info['profile_path']): ?>
								<img src="<?php echo $config['images']['base_url'].$config['images']['poster_sizes'][3].$info['profile_path']; ?>" class='img-responsive' alt="<?php echo $info['name']; ?>" title="<?php echo $info['name']; ?>">
							<?php else: ?>
								<img src="https://d3a8mw37cqal2z.cloudfront.net/assets/e7e54489e81e8eb1/images/no-profile-w185.jpg" class='img-responsive' alt="">
							<?php endif; ?>
						</div>
						<!-- Actor info -->
						<div class="col-md-8">
							<h2><small>Biography</small></h2>
							<div class="text-justify"><?php echo $info['biography']; ?></div>
						</div>
						<div class="col-md-8">
							<h2>Movies</h2>
							<div class="row movie">
							<!-- Print all the actor's movies -->
								<?php foreach ($credits as $key => $movie): ?>
									<div class="col-md-2 img-movie">
										<?php if ($movie['poster_path']): ?>
											<img src="<?php echo $config['images']['base_url'].$config['images']['poster_sizes'][1].$movie['poster_path']; ?>" class='img-responsive' alt="<?php echo $movie['original_title'];?>" title="<?php echo $movie['original_title'];?>">
										<?php else: ?>
											<img src="https://d3a8mw37cqal2z.cloudfront.net/assets/f996aa2014d2ffd1/images/no-poster-w185.jpg" class='img-responsive' alt="">
										<?php endif; ?>
									</div>
									<div class="col-md-10">
										<h3><small><?php echo $movie['release_date'] ?></small></h3>
										<div>
											<a href="<?php echo base_url(); ?>index.php/movie/index/<?php echo $movie['id'];?>"><?php echo $movie['original_title'] ?></a> as <?php echo $movie['character'] ?>
										</div>
									</div>
									<div class="clearfix"></div>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php  $this->load->view('includes/footer'); ?>
		</div>
		<?php  $this->load->view('includes/scripts'); ?>
	</body>
</html>