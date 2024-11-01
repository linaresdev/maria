
	
<?php get_header(); ?>


<article class="container">
	<heade class="col-12 bg-secondary">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		
		<div class="carousel-inner">	
			<div class="carousel-item active">
				<img src="http://192.168.10.21/wp-content/uploads/2024/10/bitmap0.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
			
			<div class="carousel-item">
				<img src="http://192.168.10.21/wp-content/uploads/2024/10/bitmap2.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="http://192.168.10.21/wp-content/uploads/2024/10/bitmap1.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
	</div>

		<!-- <a href="#">
			<img src="http://192.168.10.21/wp-content/uploads/2024/09/perez_banner_opt1.jpg"
				class="w-100" alt="@">
		</a> -->
	</heade>

	<section class="col-12">

		<article class="border-bottom p-3 mb-4 text-center bg-secondary text-white">
		</article>

		<!-- <article class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="card shadow-sm bg-light rounded-0">
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
			<div class="col-lg-8 col-sm-12">
				<div class="card rounded-0">
					<div class="card-body">
						<h5 class="card-title">Title</h5>

						<form action="#" method="POST">
							<div class="form-floating mb-2">
								<input type="text" 
									name="name"
									class="form-control"
									id="nameInput"
									placeholder="Su Nombre">
								<label for="nameInput">Su Nombre</label>
							</div>
							<div class="form-floating mb-2">
								<input type="email" 
									name="email"
									class="form-control"
									id="emailInput"
									placeholder="Correo Electronico">
								<label for="emailInput">Correo electronico</label>
							</div>
							<div class="form-floating mb-2">
								<input type="phone" 
									name="phone"
									class="form-control"
									id="phoneInput"
									placeholder="Numero de contacto">
								<label for="emailInput">Numero de contacto</label>
							</div>

							<div class="form-floating mb-2">
								<textarea name="message"
									class="form-control"
									id="msjInput"
									placeholder="Correo Electronico"
									style="height: 100px"></textarea>
								<label for="msjInput">Mensaje</label>
							</div>

							<div class="mb-2">
								<input type="hidden" name="tag" value="sendmail">
								<button type="submit" class="btn btn-primary rounded-1">
									Enviar solicitud
								</button>
							</div>
						</form>						
					</div>				
				</div>
			</div>
		</article>
	</section> -->

	
	
<!-- Portafolio -->
<article class="container border-top border-bottom px-0 py-3">
	<section class="col">
		<h4 class=" fs-5 py-2 text-uppercase text-center">
			Proyectos
		</h4>

		<div class="row g-2">
			<div class="col-lg-4 col-md-12 com-sm-6">
				<div class="card rounded-0 pt-2 bg-white">
					<div class="card-body">
						<h5 class="card-title fs-6 text-uppercase text-light-emphasis">
							Ampliación Bohío, MARMOTECH
						</h5>
						<div class="card-text">
							<?php
								echo substr('Diseño y tramitación planos para
							instalación de 690 Mts de redes trifásicas de media tensión y dos subestaciones
							eléctricas compuestas de dos transformadores Pad Mounted de 300 kva cada
							unos para dar servicio a mina de piedra coralina en Boca chic.', 0, 150).' ...'
							?>
						</div>
						<div class="text-end">
							<a href="#" class="btn btn-sm btn-light rounded-pill px-3">Leer más.</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 com-sm-6">
				<div class="card rounded-0 pt-2 bg-white">
					<div class="card-body">
						<h5 class="card-title fs-6 text-uppercase text-light-emphasis">
							Mediterráneo Internacional
						</h5>
						<div class="card-text">
							<?php
								echo substr('Construcción de las redes de media tensión y la
							instalación de un transformador de 150 kva para suplir energía a dicho proyecto
							(en proceso en 98% de avance). Rediseño de planos y construcción de toda la
							obra eléctrica de baja tensión y canalización desde el inicio, (en proceso, 30%
							avance). Diseño y construcción de canalización data y cámaras, (en proceso,
							10% avance)', 0, 150)." ...";
							?>
						</div>
						<div class="text-end">
							<a href="#" class="btn btn-sm btn-light rounded-pill px-3">Leer más.</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 com-sm-6">
				<div class="card rounded-0 pt-2 bg-white">
					<div class="card-body">
						<h5 class="card-title fs-6 text-uppercase text-light-emphasis">
							Bohío, MARMOTECH
						</h5>
						<div class="card-text overflow-auto">
							<?php
								echo substr('Diseño y tramitación planos para instalación
							de 90 Mts de redes trifásicas de media tensión y una subestación eléctrica
							compuesta de un transformador Pad Mounted de 300 kva para dar servicio a
							mina de piedra coralina.', 0, 150)." ...";
							?>
						</div>
						<div class="text-end">
							<a href="#" class="btn btn-sm btn-light rounded-pill px-3">Leer más.</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
</article>
<!-- Suplidores -->
<article class="container pt-3">

	<section class="col-12">

		<h4 class=" fs-5 py-2 text-uppercase text-center">
			Nuestros suplidores
		</h4>

		<div class="row">
			<div class="col-3 border">
				<img src="http://192.168.10.21/wp-content/uploads/2024/11/logo-dejesa.png" 
						class="w-75"
						alt="@">
			</div>
			<div class="col-3 border py-2">
				<img src="http://192.168.10.21/wp-content/uploads/2024/11/jjelectric.png" 
					class="w-100"
					alt="@">
			</div>
			<div class="col-3 border py-3">
				<img src="http://192.168.10.21/wp-content/uploads/2024/11/prodeinca_logo.png" 
						class="w-100"
						alt="@">
			</div>
			<div class="col-3 border">
				<img src="http://192.168.10.21/wp-content/uploads/2024/11/mundoled.png" 
						class="w-100"
						alt="@">
			</div>
		</div>
	</section>		
</article>

<?php get_footer(); ?>