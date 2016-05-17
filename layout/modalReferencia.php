<?php
require '../config/conexion.php';

if( isset($_GET['referencia_id']) ) {
    $reference_id = $_GET['referencia_id'];
} else {
    die("Solicitud no válida.");
}

$sql = "SELECT * FROM referencia WHERE active = 1 AND id = $reference_id";
if ($result = $mysqli -> query ($sql) ) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;
    if ($row_cnt > 0) {
        while ($R = $result->fetch_array()) {
            echo $R['componentes'] . "|" . $R['productos_id'] . "|" . $R['image'] ."|" . $R['nombre_referencia'];
        }
    }
    else
    {
        echo "no hay contenido por mostrar";
    }
}

?>
