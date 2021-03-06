<?php
	require 'config/conexion.php';
	require 'includes/helpers.php';
	redirectOne();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIAMSA - Paso 1 - Tipo de cultivo</title>
	<?php require 'includes/head.php' ?>
</head>
<body>
	<!-- Step One -->
	<section class="wrapper-step-one wrapper-app">
		<!-- NAV -->
		<nav>
			<section class="row text-small-only-center">
				<article class="small-12 medium-3 column ">
					<a href="">
						<img src="images/logo-ciamsa.png" alt="" width="180px" class ="logo">
					</a>
				</article>
				<section class="small-12 medium-9 column text-medium-right btn-header">
					<a href="index.php" class="button btn-sunflower"> <span class="icon-home" aria-hidden="true"></span> Inicio</a>
					<a href="cotizar.php" class="button btn-ciamsa"> <span class="icon-user" aria-hidden="true"></span> Solicitar cotización</a>
				</section>
			</section>
		</nav>
		<!-- end NAV -->
		<!-- content --> 
		<section class="content">
			<!-- title -->
			<section class="row header-title">
				<section class="small-10 small-centered column text-center">
					<article>
						<h2>
							<span class="step">
								Paso 1 de 3
							</span>
							Tipos de Cultivos
							<span class="textline">
								Seleccione su tipo de cultivo
							</span>
						</h2>
					</article>
				</section>
			</section>	
			<!-- End  title -->
			<!-- content -->
			<section class="row content">
				<section class="small-10 medium-9 small-centered column text-center">
					<ul class="row small-up-4 medium-up-5 list-icon-cultivo" id="list-cultivo">
						<?php
							require 'layout/list_cultivo_icon.php'
						?>
					</ul>
				</section>
			</section>
			<!-- End  content -->
		</section>	
		<!-- End  content -->
		<!-- Bottom -->
		<section class="row bottom">
			<section class="small-12 column text-center">
				<a href="cotizar.php">
					<img data-interchange="[images/ads/forkamix-mezclas-medidas-m.jpg, small], [images/ads/forkamix-mezclas-medidas-m.jpg, medium], [images/ads/forkamix-mezclas-medidas.jpg, large]"  alt="Forkamix a la medida" >
				</a>
			</section>
		</section>	
		<!-- End  Bottom -->
	</section>
	<!-- End Step One -->
	<footer class="row expanded">
		<section class="small-12 text-center">
			<p>
				Desarrollo por Innova Corporación S.A.S
			</p>
		</section>
	</footer>
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/what-input.js"></script>
    <script src="assets/js/foundation.min.js"></script>
	<script src="vendors/away/jquery.away.js"></script>
    <script>
      $(document).foundation();
    </script>
	<script>
		$(document).ready(function(){
			<?php require 'layout/animate/animate_index.php' ?>
			animateStepOne();
			
			$.idle(60, function() {
				window.location.href = "index.php";
			});
		});
	</script>
</body>
</html>