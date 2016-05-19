<?php
require 'config/conexion.php';
require 'includes/helpers.php';
redirectThree();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>CIAMSA -Paso 3 - Fertilizantes </title>
    <?php require 'includes/head.php' ?>
</head>
<body>
<!-- Step One -->
<section class="wrapper-step-three wrapper-app">
    <!-- NAV -->
    <?php require 'includes/nav.php' ?>
    <!-- end NAV -->

    <!-- bg paper -->
    <section class="bg-paper expanded">

        <!-- content -->
        <section class="content">
            <!-- title -->
            <section class="row header-title text-center">
                <article class="small-12 small-centered column text-center">
                        <h2>
							<span class="step">
								Paso 3 de 3
							</span>
                            Fertilizante para su cultivo
							<span class="textline">
								Los mejores fertilizantes para su cultivo son
							</span>
                        </h2>
                </article>
            </section>
            <section class="row">
                    <article class="small-12 small-centered column text-center">
                        <a href="cotizar.php<?php if( isset ( $url ) ) { echo $url; } ?>" class="button btn-grapefruit">
                            <span class="icon-information"></span> Solicitar cotización
                        </a>
                    </article>
                </section>
            <!-- End  title -->
        </section>
        <!-- End  content -->

            <!-- List Logo Filter -->
           <!-- <section class="row ">
                <section class="small-12 medium-10 small-centered column text-center list-filter" >
                    <ul class="row small-up-5 list-logo-products">
                        <?php
                      //  require 'layout/list_logo_productos.php'
                        ?>
                        <li class="column text-center">
                            <a href="" class=" ">  Mostrar todos</a>
                        </li>
                    </ul>
                </section>
            </section>-->
            <!-- End List Logo Filter -->
        <?php include "includes/modal.php" ?>
            <!-- List Fertilizante -->
            <section class="row ">
                <section class="small-12 medium-11 small-centered column text-center list-fertilizantes" >
                    <ul class="row small-up-3 medium-up-5 list-fertilizantes" id="list-fertilizantes">
                        <?php
                        require 'layout/list_fertilizante.php'
                        ?>
                    </ul>
                </section>
            </section>
            <!-- End List Fertilizante -->

    </section>
        <!-- Bottom -->
    <section class="row bottom">
        <section class="small-12 column text-center">
            <a href="cotizar.php">
                <img data-interchange="[images/ads/nitroeffi-m.jpg, small], [images/ads/nitroeffi-m.jpg, medium], [images/ads/nitroeffi.jpg, large]"  alt="Forkamix a la medida" >
            </a>
        </section>
    </section>
    <!-- End  Bottom -->
    <!-- footer -->
    <footer class="row expanded">
        <section class="small-12 text-center">
            <p>
                Desarrollo por Innova Corporación S.A.S
            </p>
        </section>
    </footer
        <!-- end footer -->
<!-- bg paper -->
</section>

<!-- End Step Three -->
<form action="layout/modalReferencia.php?:VALUE_ID" method="post" id="formReferencia">

</form>
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/what-input.js"></script>
<script src="assets/js/foundation.min.js"></script>
<script src="vendors/away/jquery.away.js"></script>
<?php require 'includes/scripts.php' ?>
<script>
    $(document).foundation();
</script>
<script>
    $(document).ready(function(){
        <?php require 'layout/animate/animate_index.php' ?>
        animateStepThree();
        
        $.idle(60, function() {
            window.location.href = "index.php";
        });
    });
</script>
</body>
</html>