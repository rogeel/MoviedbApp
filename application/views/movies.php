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
				<li ><a href="<?php echo base_url(); ?>index.php/actors?query=<?php echo urlencode($this->input->get('query'));?>">Actors</a></li>
				<li class="active"><a href="#">Movies  <span class="badge"><?php echo $result['total_results']; ?></span></a></li>
			 	<li class="search pull-right">
				  	<form class="form-inline" role="form" method="get" action="<?php echo base_url()?>index.php/movies">
						<input type="text" required class="form-control" id="inputEmail3" name="query" placeholder="Search for a movie...">
					</form>
				</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="content">
					<!-- Print the query results -->
					<?php if($result['total_results']>0): ?>
						<?php foreach ($result['results'] as $key => $movie): ?>
							<div class="col-md-3 movies">
								<?php if ($movie['poster_path']): ?>
									<img src="<?php echo $config['images']['base_url'].$config['images']['poster_sizes'][1].$movie['poster_path']; ?>" class='img-responsive' alt="<?php echo $movie['original_title'];?>" title="<?php echo $movie['original_title'];?>">
								<?php else: ?>
									<img src="https://d3a8mw37cqal2z.cloudfront.net/assets/e7e54489e81e8eb1/images/no-profile-w185.jpg" class='img-responsive' alt="">
								<?php endif; ?>
								<span class="name">
									<a href="<?php echo base_url(); ?>index.php/movie/index/<?php echo $movie['id'];?>">
										<h2><small><?php echo (strlen($movie['original_title']) > 40) ? substr($movie['original_title'],0,40).'...' : $movie['original_title'];?></small></h2>
									</a>
								</span>
							</div>
						<?php endforeach ?>
					<?php else: ?>
						<!-- Not results -->
						<div class="col-md-12">
							<h2><small>We didn't find any movie that matched your query of </small><?php echo $this->input->get('query'); ?></h2>
						</div>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
			<!-- Pagination -->
				<div class="col-md-12">
					<?php echo $links; ?>
				</div>
				<?php if($links):?>
					<div class="col-md-12">
						<span class="pull-right">Total of pages: <?php echo $result['total_pages']; ?></span>
					</div>
				<?php endif; ?>
			</div>
			<p class="footer text-center">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
			<?php  $this->load->view('includes/footer'); ?>
		</div>
		<?php  $this->load->view('includes/scripts'); ?>
	</body>
</html>