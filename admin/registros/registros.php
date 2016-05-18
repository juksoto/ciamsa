<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="robots" content="nofollow" />
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
</head>
<body class="mostrarDatos">
	<header>
	<h1 >Registros Aplicacion</h1>
	<header>
	<div class="settings row" style="text-align:center"> <a href="reporte.php" style="color:white"><p style="display:inline-block; padding-right:50px">
		<img src="img/ico-download.png" width="40" />Descargar</p></a> </div>
<table align="center" style="margin:0 auto">
  <thead>
    <tr style="background:#eeeeee">
      <th>id</th>
      <th>Fecha</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Departamento</th>
      <th>Ciudad</th>
	  <th>Telefono</th>	            
	  <th>Celular</th>	            
	  <th>Tipo cultivo</th>	            
	  <th>Etapa de Cultivo</th>	
	  <th>Empresa</th>  
	  <th>¿Mezcla a la medida?</th>                      
	  <th>Mensaje</th>                      

    </tr>
  </thead>
  <tbody>
  	<?php 
		require '../include/conexion.php';

	$sql = "
    SELECT 
        c.cultivo,
        e.etapas,
        d.departamento,
        u.*
    FROM
       usuario u
    INNER JOIN
      tipo_cultivo c
    ON
      u.tipo_cultivo_id = c.id
    INNER JOIN
      etapas_cultivo e
    ON
      u.etapas_cultivo_id = e.id
    INNER JOIN
      departamentos d
    ON
      u.departamentos_id = d.id
     ORDER BY
     u.fecha ASC
    ";
		 if ($result = $mysqli -> query ($sql) ) {

		        /* determinar el número de filas del resultado */
		        $row_cnt = $result -> num_rows;

		        if ($row_cnt > 0)
		        {
		            while ($R = $result -> fetch_array())
		            {
		                   ?>
		        <tr>
		            <td>
		                <?= $R["id"] ?>
		            </td>
		            <td>
		                <?= $R["fecha"] ?>
		            </td>
		            <td>
		                <?= $R["nombre"] ?>
		            </td>
		            <td>
		                <?= $R["correo"] ?>
		            </td>
		            <td>
		                <?= $R["departamento"] ?>
		            </td>
		            <td>
		                <?= $R["ciudad"] ?>
		            </td>
		            <td>
		                <?= $R["telefono"] ?>
		            </td>
		            <td>
		                <?= $R["celular"] ?>
		            </td>
		            <td>
		                <?= $R["cultivo"] ?>
		            </td>
		            <td>
		                <?= $R["etapas"] ?>
		            </td>
		            <td>
		                <?= $R["empresa"] ?>
		            </td>
		             <td>
		                <?= $R["fertilizante"] ?>
		            </td>
		             <td>
		                <?= $R["informacion"] ?>
		            </td>
		        </tr>
		        <?php
		            }
		        }
		        else{
		            echo "No hay registros";
		        }

		        /* cerrar el resultset */
		        $result -> close();
		    }

		    if (!$mysqli -> query ($sql)) {
		        printf("Errormessage: %s\n", $mysqli -> error);
		    }
?>
  </tbody>
</table>
<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script> $(document).foundation();</script>
</body>
</html>


