<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php wp_head(); ?>
</head>
<body>	

	 <section class="container-fluid bg-danger text-white border border-danger">
		<!-- <article class="col" style="font-size: 13px;">
			<div class="d-flex align-items-center">
				<div class="w-75">
					Ingeniería & Proyectos Electromecánicos y Refrigeración.
				</div>
				<div class="w-25 text-end">
					809-273-5371 / 809-861-0499
				</div>
			</div>
		</article>	-->	
	</section> 

	<nav class="navbar navbar-expand-lg bg-white border-bottom">
		<div class="container">

			<a href="<?php echo home_url(); ?>" class="navbar-brand">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/brand.png" 
					style="width: 40px; 0; border-radius: 25% 25%; margin: -9px 0 -7px 0;padding: 0px 2px;"
					alt="@">
				INPROER
			</a>

			<div class="navbar-collapse collapse">
				<?php if( !is_user_logged_in()): ?>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">							
							<a href="wp-login.php" class="btn btn-sm btn-outline-danger rounded-pill px-3">
								<span class="mdi mdi-login"></span> 
								Acceder
							</a>
						</li>
					</ul>
				<?php else: ?>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="#" class="nav-link">Link</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Link</a>
					</li>
				</ul>
				<?php endif; ?>
			</div>

		</div>
	</nav>

