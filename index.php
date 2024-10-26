
	
<?php get_header(); ?>


<article class="container">
	<heade class="col-12">
		<a href="#">
			<img src="http://192.168.10.21/wp-content/uploads/2024/09/perez_banner_opt1.jpg"
				class="w-100" alt="@">
		</a>
	</heade>



	<section class="col-12 py-3">

		<article class="border-bottom p-3 mb-4 text-center">
			Ofertas y Servicios
		</article>

		<article class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="card shadow-sm bg-light">
					<div class="card-body">
						<h5 class="card-title">Title</h5>
						<div class="cart-text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Eius tempore perferendis quos aliquam cumque quis ex 
							accusantium commodi laudantium natus, maxime nostrum unde 
							eos temporibus suscipit doloremque corporis eligendi hic!
						</div>
					</div>				
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="card shadow-sm bg-white">
					<div class="card-body">
						<h5 class="card-title">Title</h5>
						<div class="cart-text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Eius tempore perferendis quos aliquam cumque quis ex 
							accusantium commodi laudantium natus, maxime nostrum unde 
							eos temporibus suscipit doloremque corporis eligendi hic!
						</div>
					</div>				
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="card shadow-sm bg-white">
					<div class="card-body">
						<h5 class="card-title">Title</h5>
						<div class="cart-text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Eius tempore perferendis quos aliquam cumque quis ex 
							accusantium commodi laudantium natus, maxime nostrum unde 
							eos temporibus suscipit doloremque corporis eligendi hic!
						</div>
					</div>				
				</div>
			</div>
		</article>
	</section>
	<?php while(have_posts()):the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</article>

<?php get_footer(); ?>