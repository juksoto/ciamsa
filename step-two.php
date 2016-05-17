<?php
    require 'config/conexion.php';
    require 'includes/helpers.php';
    redirectTwo();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'includes/head.php' ?>
</head>
<body>
<!-- Step One -->
<section class="wrapper-step-two wrapper-app">
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
                <a href="step-one.php?home" class="button btn-aqua"> <span class="icon-back" aria-hidden="true" style="padding-top:5px"></span> Regresar</a>
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
								Paso 2 de 3
							</span>
                            Etapas del Cultivo
							<span class="textline">
								Seleccione la etapa en la que se encuentra su cultivo
							</span>
                    </h2>
                </article>
            </section>
        </section>
        <!-- End  title -->
        <!-- content -->
        <section class="row content">
            <section class="small-10 medium-11 small-centered column text-center">
                <ul class="row small-up-2 medium-up-4 list-image-cultivo">
                    <?php
                    require 'layout/list_etapas_images.php'
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
           <!-- <img src="images/ads/forkamix-medida.png" alt="Forkamix a la medida" >-->
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