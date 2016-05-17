<!DOCTYPE html>
<html lang="es">
<head>
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
                <article class="small-10 small-centered column text-center">

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
                    <article class="small-10 small-centered column text-center">
                        <a href="" class="button btn-grapefruit">
                            <span class="icon-information"></span> Solicitar cotización
                        </a>
                    </article>
                </section>
            </section>
            <!-- End  title -->
            <!-- List Logo Filter -->
            <section class="row ">
                <section class="small-10 medium-10 small-centered column text-center list-filter" >
                    <ul class="row small-up-5 list-logo-products">
                        <?php
                        require 'layout/list_logo_productos.php'
                        ?>
                        <li class="column text-center">
                            <a href="" class=" button btn-ciamsa"> <span class="icon-filter"></span> Mostrar todos</a>
                        </li>
                    </ul>
                </section>
            </section>
            <!-- End List Logo Filter -->
            <!-- List Fertilizante -->
            <section class="row ">
                <section class="small-12 medium-11 small-centered column text-center list-fertilizantes" >
                    <ul class="row small-up-5 list-logo-products">
                        <?php
                        require 'layout/list-fertilizante.php'
                        ?>
                    </ul>
                </section>
            </section>
            <!-- End List Fertilizante -->
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
    <!-- bg paper -->

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