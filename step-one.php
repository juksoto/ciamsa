<?php
	require 'config/conexion.php';
	require 'includes/helpers.php';
	redirectOne();
?>

<!DOCTYPE html>
<html lang="es">
<head>
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
						<img src="images/logo-ciamsa.png" alt="" width="180px">
					</a>
				</article>
				<section class="small-12 medium-9 column text-medium-right btn-header">
					<a href="index.php" class="button btn-sunflower"> <span class="icon-home" aria-hidden="true"></span> Inicio</a>
					<a href="" class="button btn-ciamsa"> <span class="icon-user" aria-hidden="true"></span> Solicitar cotización</a>
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
					<ul class="row small-up-5 list-icon-cultivo">
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
					<img src="images/ads/forkamix-medida.png" alt="Forkamix a la medida" >
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
    <script>
      $(document).foundation();
    </script>
</body>
</html>