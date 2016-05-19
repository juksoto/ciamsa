<?php
require '../config/conexion.php';

if( isset($_GET['referencia_id']) ) {
    $name = $_GET['name'];
} else {
    die("Solicitud no válida.");
}


?>
