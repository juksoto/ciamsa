<?php
require 'config/conexion.php';
require 'includes/helpers.php';
redirectSend();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>CIAMSA - Registro exitoso</title>
    <?php require 'includes/head.php' ?>
</head>
<body>
<!-- Step One -->
<section class="wrapper-step wrapper-app">
    <!-- NAV -->
    <nav>
        <section class="row text-small-only-center">
            <article class="small-12 medium-3 column ">
                <a href="">
                    <img src="images/logo-ciamsa.png" alt="" width="180px" class ="logo">
                </a>
            </article>
            <section class="small-12 medium-9 column text-medium-right btn-header hide-for-small-only">
                <a href="cotizar.php" class="button btn-ciamsa"> <span class="icon-user" aria-hidden="true"></span> Solicitar cotización</a>
            </section>
        </section>
    </nav>
    <!-- end NAV -->
    <section class="row">
        <section class="small-12 medium-6 column medium-centered">
           <?php  require 'vendors/send/app.php'; ?>
        </section>
    </section>
    <!-- content -->
    <section class="content">
        <?php require 'includes/modalIndex.php' ?>
        <!-- Logos -->
        <section class="row hide-for-small-only">
            <section class="small-10 small-centered column text-center">
                <ul class="row small-up-2 medium-up-4 list-logo" >
                    <li class="column text-center" data-name="forkamix">
                        <a data-open="productosModal" class="btnProductos" >
                            <img src="images/logo_forkamix.png" alt="Forkamix">
                        </a>
                    </li>
                    <li class="column text-center" data-name="nutrikimia">
                        <a data-open="productosModal" class="btnProductos" >
                            <img src="images/logo_nutrikimia.png" alt="Nutrikimia">
                        </a>
                    </li>
                    <li class="column text-center"  data-name="nitroeffi">
                        <a data-open="productosModal" class="btnProductos">
                            <img src="images/logo_nitroeffi.png" alt="Nitro Effi100">
                        </a>
                    </li>
                    <li class="column text-center" data-name="solucionuan">
                        <a data-open="productosModal" class="btnProductos" >
                            <img src="images/logo_solucion_uan.png" alt="Solucion UAN">
                        </a>
                    </li>
                </ul>
            </section>
        </section>
        <!-- End  Logos -->
        <!-- header image -->
        <section class="row header-image">
            <section class="small-12 column text-center">
                <a href="step-one.php?home">
                    <img src="images/producto_nutrir_su_cultivo.png" alt="Conozca el producto para nutrir su cultivo" width="490">
                </a>
                <h1>Conozca 
						<span class="color-ciamsa2"> 
							el producto 
						</span> 
						<span class="small">
							para nutrir su cultivo
						</span>
                </h1>
                <section class="row">
                    <article class="small-7 medium-3 column text-center small-centered medium-centered">
                        <a href="step-one.php?home" class="button btn-grapefruit expanded ">
                            Iniciar aquí
                        </a>
                    </article>
                </section>
                <section class="row">
                    <article class="small-7 medium-3  column text-center small-centered">
                        <a href="cotizar.php" class="button btn-ciamsa expanded show-for-small-only">
                            <span class="icon-user" aria-hidden="true"></span> Solicitar cotización
                        </a>
                    </article>
                </section>
            </section>
        </section>
        <!-- End  header image -->
        <!-- Logos Small -->
        <section class="row show-for-small-only">
            <section class="small-12 small-centered column text-center">
                <ul class="row small-up-2  list-logo-small" >
                    <li class="column text-center" data-name="forkamix">
                        <a data-open="productosModal" class="btnProductos" >
                            <img src="images/logo_forkamix.png" alt="Forkamix">
                        </a>
                    </li>
                    <li class="column text-center" data-name="nutrikimia">
                        <a data-open="productosModal" class="btnProductos" >
                            <img src="images/logo_nutrikimia.png" alt="Nutrikimia">
                        </a>
                    </li>
                    <li class="column text-center"  data-name="nitroeffi">
                        <a data-open="productosModal" class="btnProductos">
                            <img src="images/logo_nitroeffi.png" alt="Nitro Effi100">
                        </a>
                    </li>
                    <li class="column text-center" data-name="solucionuan">
                        <a data-open="productosModal" class="btnProductos" >
                            <img src="images/logo_solucion_uan.png" alt="Solucion UAN">
                        </a>
                    </li>
                </ul>
            </section>
        </section>
        <!-- End  Logos Small -->
    </section>
    <!-- End  content -->
    <!-- Bottom -->
    <section class="row bottom">
        <section class="small-12 column text-center">
            <img src="images/bottom-ciamsa.png" alt="Expertos en mezclas" width="694">
        </section>
    </section>
    <!-- End  Bottom -->
</section>
<!-- End Step One -->
<footer class="row expanded">
    <section class="small-12 text-center">
        <p>
            Una solución de <a href="http://innovalamarca.com/"> INNOVABRAND</a>
        </p>
    </section>
</footer>
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
        animateIndex();
        $.idle(60, function() {
            window.location.href = "index.php";
        });
    });
</script>

</body>
</html>