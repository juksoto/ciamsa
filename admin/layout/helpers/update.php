<?php

if ($_POST)
{
    require '../../include/conexion.php';

    $tipo_cultivos_id = (int) $_POST['tipo_cultivos_id'];
    $etapas_cultivos_id = (int)$_POST['etapas_cultivos_id'];
    $referencia_id = (int) $_POST['referencia_id'];

    if (isset($_GET['create']))
    {
        $sql = 'INSERT INTO cultivo_etapas_referencias (etapas_cultivo_id, tipo_cultivo_id, referencia_id) VALUES ("'.$etapas_cultivos_id.'", "'.$tipo_cultivos_id.'","'.$referencia_id.'")';
        if ($mysqli -> query ($sql) == true ) {
            $url = "../../index.php?sucess";
            header('Location:' . $url);
        }
        else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
}