<?php
require 'include/conexion.php';
?>
<!DOCTYPE html>
    <html lang="es">
        <?php  require 'layout/head.php'; ?>
    <body>
    <section class="row text-center">
        <section class="col-xs-12">
            <h1>
                Crear relacion <br>
                Productos - Etapa y Tipo de Cultivo
            </h1>
        </section>
    </section>
    <section class="container text-center">
        <section class="row">
            <section class="col-xs-12">
                <form action="layout/helpers/update.php?create" class="form-horizontal" method="post">
                    <?php require 'layout/form.php'; ?>
                </form>
            </section>
        </section>
    </section>

    <?php require 'layout/scripts.php';?>

    </body>
</html>