<?php
require 'config/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>CIAMSA - Cotizacion</title>
    <?php require 'includes/head.php' ?>
</head>
<body>
<!-- Step One -->
<section class="wrapper-cotizar wrapper-app">
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
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="button btn-aqua"> <span class="icon-back" aria-hidden="true" style="padding-top:5px"></span> Regresar</a>
            </section>
        </section>
    </nav>
    <!-- end NAV -->

    <!-- bg paper -->
    <section class="bg-paper expanded">

        <!-- content -->
        <section class="content">
            <!-- title -->
            <section class="row header-title text-center">
                <article class="small-12 small-centered column text-center">
                    <h2>
                        Solicitar Cotización
							<span class="textline">
								Por favor diligencie la siguiente información del formulario.
							</span>
                    </h2>
                </article>
            </section>
            <!-- End  title -->
            <!-- Form -->
            <section class="row form-cotizar text-center">
                <section class="small-12 medium-8 columns medium-centered">
                    <form action="step-end.php" method="post">
                        <!-- Nombre -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="name" class ="text-left">
                                     Nombre
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <input type="text" name="nombre" required class="form-control">
                                <input type="text" name="direccion"  class="form-control input-one">
                                <input type="text" name="persona" value="ciamsa app" class="input-one">
                            </article>
                        </section>
                        <!-- End Nombre -->
                        <!-- Email -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="email" class ="text-left">
                                    Email
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <input type="email" name="email" required class="form-control">
                            </article>
                        </section>
                        <!-- End Email -->
                        <!-- Departamento -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="depto"  class ="text-left">
                                    Departamento
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">

                                <select name="departamento" id="departamento" required class="form-control">
                                    <option value>Seleccionar uno</option>
                                    <?php require 'layout/list_departamentos.php' ?>
                                </select>
                            </article>
                        </section>
                        <!-- End Departamento -->
                        <!-- Ciudad -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="ciudad" class ="text-left">
                                    Ciudad
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <input type="text" name="ciudad" required class="form-control">
                            </article>
                        </section>
                        <!-- End Ciudad -->
                        <!-- Celular -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="telefono" class ="text-left">
                                    Teléfono
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <input type="text" name="telefono" required class="form-control">
                            </article>
                        </section>
                        <!-- End Telefono -->
                        <!-- Celular -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="celular" class ="text-left">
                                    Celular
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <input type="text" name="celular" required class="form-control">
                            </article>
                        </section>
                        <!-- End Celular -->
                        <!-- Tipo Cultivo -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="tipo_cultivo" class ="text-left">
                                    Tipo de cultivo
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <select name="tipo_cultivo" id="tipo_cultivo" required class="selecter-element">
                                    <option value>Seleccionar uno</option>
                                    <?php require 'layout/listo_cultivo_form.php' ?>
                                </select>
                            </article>
                        </section>
                        <!-- End Tipo Cultivo -->
                        <!-- Etapa del cutltivo -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="tipo_cultivo" class ="text-left">
                                    Etapa del cultivo
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <select name="etapa_cultivo" id="etapa_cultivo" required class="form-control">
                                    <option value>Seleccionar uno</option>
                                    <?php require 'layout/list_etapas_form.php' ?>
                                </select>
                            </article>
                        </section>
                        <!-- End Etapa del cutltivo -->
                        <!-- Forkamix a la medida -->
                        <section class="row">
                            <article class="small-12 medium-9  medium-offset-3 columns text-left text-small-only-center">
                                <label class ="text-left">
                                    <input type="checkbox" name="forkamix" id="forkamix" value="si" class="form-control">
                                Deseo Forkamix mezcla a la medida
                            </article>
                        </section>
                        <!-- End Forkamix a la medida -->
                        <!-- Mensaje -->
                        <section class="row">
                            <article class="small-4 medium-3 columns">
                                <label for="tipo_cultivo" class ="text-left">
                                   Mensaje
                                </label>
                            </article>
                            <article class="small-8  medium-9 columns">
                                <textarea name="mensaje" id="mensaje" cols="30" rows="2" class="form-control"></textarea>
                            </article>
                        </section>
                        <!-- End Mensaje -->
                        <!-- Mensaje -->
                        <section class="row">
                            <article class="small-12 columns">
                                <button type="submit" value="enviar" class="button btn-ciamsa"> Solicitar cotización </button>
                            </article>
                        </section>
                        <!-- End Mensaje -->
                    </form>
                </section>
            </section>
            <!-- End  form -->
        </section>
        <!-- End  content -->

    </section>
    <!-- Bottom -->
    <section class="row bottom">
        <section class="small-12 column text-center">
            <img data-interchange="[images/ads/forkamix-medida-m.jpg, small], [images/ads/forkamix-medida-m.jpg, medium], [images/ads/forkamix-medida.jpg, large]"  alt="Forkamix a la medida" >
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
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/what-input.js"></script>
<script src="assets/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>