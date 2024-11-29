<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php wp_head(); ?>
</head>
<body>	

	 <section class="container-fluid bg-danger text-white border border-danger header-top">
		<article class="col" style="font-size: 13px;">
			<div class="d-flex align-items-center">
				<div class="w-50">
					Ingeniería & Proyectos Electromecánicos y Refrigeración.
				</div>
				<div class="w-50 text-end">
					<span class="mdi mdi-cellphone"></span> 809-273-5371  / 
					<span class="mdi mdi-cellphone"></span> 809-861-0499
				</div>
			</div>
		</article>		
	</section> 

	<nav class="navbar navbar-expand-lg bg-white shadow py-0">
		<div class="container-fluid">

			<a href="<?php echo home_url(); ?>" class="navbar-brand">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/brand.png" 
					style="width: 40px; 0; border-radius: 25% 25%; margin: -10px 0 -9px 0;padding: 0px 2px;"
					alt="@">
				INPROER
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="navbar-collapse collapse" id="mainNav">
				
					<ul class="navbar-nav ms-auto">

						<li class="nav-item">
							<a href="<?php echo home_url('contactos'); ?>" class="nav-link">
								<span class="mdi mdi-contacts-outline"></span>
								Contactos
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo home_url('nosotros'); ?>" class="nav-link">
								<span class="mdi mdi-human-male-board-poll"></span>
								Nosotros
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo home_url('servicios'); ?>" class="nav-link">
								<span class="mdi mdi-human-dolly"></span>
								Servicios
							</a>
						</li>

						<?php if( !is_user_logged_in()): ?>
						<li class="nav-item">							
							<a href="wp-login.php" style="margin-bottom: -10px; display:inline-block;" class="btn btn-sm btn-outline-success rounded-pill px-3">
								<span class="mdi mdi-login"></span> 
								Acceder
							</a>
						</li>
						<?php else: ?>					
						<li class="nav-item">
							<a href="<?php echo wp_logout_url(); ?>" class="nav-link">
								<span class="mdi mdi-logout"></span> 
								Salir
							</a>
						</li>
						<?php endif; ?>
					</ul>
			</div>

		</div>
	</nav>

