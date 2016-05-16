<?php
require 'include/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
    <?php
        require 'layout/head.php';
    ?>
    <body>
    <section class="container">
        <section class="row">
            <section class="col-xs-12">
                <h1 class="text-center">
                    Admin <br>
                    Productos - Etapa y Tipo de Cultivo
                </h1>
            </section>
        </section>
        <section class="row">
            <section class="col-xs-12 text-right">
                <a href="create.php" class="btn btn-default">Nueva Relacion</a>
            </section>
        </section>
    </section>

    <section class="container text-center">
        <section class="row">
            <section class="col-xs-12">
                <?php include 'layout/message.php' ?>
                <?php  require 'layout/table.php'; ?>
            </section>
        </section>
    </section>
        <?php require 'layout/scripts.php'; ?>
    </body>
</html>