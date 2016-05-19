<?php 
	require '../include/conexion.php';

	if ($result = $mysqli->query("SELECT * FROM usuario")) {

	    /* determinar el número de filas del resultado */
	    $row_cnt = $result->num_rows;

	    /* cerrar el resultset */
	    $result->close();

	}

?>

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
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>

</head>
<body class="mostrarDatos">
	<header>
	<h1 >Registros Aplicacion</h1>
	<header>
	<section class="row">
		<section class="small-12 medium-8 columns medium-centered">
			<form action="reporte.php" method ="post">
				<section class="small-3 columns">
					Seleccione un rango
				</section>
				<section class="small-6 columns">

					<select name="cantRegistros" id=""  <?php if ($row_cnt == 0) { echo 'disabled="disabled"' ; } ?> required>	
						<option value=""> Seleccione el rango </option>
							<?php

								$bloqueRango = 500;
							
								//cantidad de bloques
								if ($row_cnt > $bloqueRango)
								{
									$cantidadBloques = ceil($row_cnt / $bloqueRango);
									
									for ( $i = 0; $i < $cantidadBloques; $i++)
									{
										$rangoIni = ($bloqueRango * $i) + 1;
										
										//  Si es el ultimo rango
										if ($i == ($cantidadBloques - 1 ) )
										{
											$rangoFinal = $row_cnt;
										}
										else
										{
											$rangoFinal = ($rangoIni + $bloqueRango) - 1 ;	
										}

										?> 
										<option value="<?php echo $rangoIni . "|" . $rangoFinal ?>"> <?= $rangoIni . " a " . $rangoFinal ?> </option>
									
										<?php	

									}
									
									echo $cantidadBloques;
								}
								else
								{
									$rangoIni = 1;
									$rangoFinal = $row_cnt;
									?>
									<option value="<?php echo $rangoIni . "|" . $rangoFinal ?>"> <?= $rangoIni . " a " . $rangoFinal ?> </option>
									<?php
								}


							 ?>
						
					</select>
				</section>
				<section class="small-3 columns text-left">
					<button type="submit" class="btn" <?php if ($row_cnt == 0) { echo 'disabled="disabled"' ; } ?> > Descargar</button>
				</section>
			</form>
		</section>
	</section>

	<section class="settings row" style="text-align:center"> 
		<section class="small-12 medium-6 columns text-center medium-centered">
			<p>
			<?php 
			    printf("Hay %d registros en total \n", $row_cnt);
			?>
			</p>
		</section>
	</section>
	
			
<section class="row ">
	<section class="small-12 columns">
		

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
     u.fecha DESC
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
		        /* cerrar el resultset */
		        $result -> close();
		    }

		    if (!$mysqli -> query ($sql)) {
		        printf("Errormessage: %s\n", $mysqli -> error);
		    }
?>
  </tbody>
</table>

	</section>
</section>
	
<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script> $(document).foundation();</script>
</body>
</html>


