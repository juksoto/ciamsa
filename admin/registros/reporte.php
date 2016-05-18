<?php 
 $conexion = mysql_connect("localhost", "root", "");
 mysql_select_db ("ciamsa", $conexion);  
mysql_query("set names 'utf8'");
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
 $resultado = mysql_query ($sql, $conexion) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);
 
mysql_close ();
if ($registros > 0) {
   require_once 'lib/PHPExcel.php';
   $objPHPExcel = new PHPExcel();
    
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("InnovaBrand")
        ->setLastModifiedBy("InnovaBrand")
        ->setTitle("Registros CIAMSA APP")
        ->setSubject("Registros")
        ->setDescription("Registros ")
        ->setKeywords("Registros ")
        ->setCategory("registros");    
 
  
	$tituloReporte = "Registros CIAMSA APP";
	$titulosColumnas = array('id', 'Fecha','Nombre', 'Correo', 'Departamento','Ciudad','Telefono','Celular', 'Cultivo','Etapa','Empresa','Fertilizante','informacion');
	$objPHPExcel->setActiveSheetIndex(0)
				->mergeCells('A1:M1')
				->setCellValue('A1',$tituloReporte)
    		    ->setCellValue('A3',  $titulosColumnas[0])
	            ->setCellValue('B3',  $titulosColumnas[1])
    		    ->setCellValue('C3',  $titulosColumnas[2])
    		    ->setCellValue('D3',  $titulosColumnas[3])
	            ->setCellValue('E3',  $titulosColumnas[4])
    		    ->setCellValue('F3',  $titulosColumnas[5])
    		    ->setCellValue('G3',  $titulosColumnas[6])
	            ->setCellValue('H3',  $titulosColumnas[7])
    		    ->setCellValue('I3',  $titulosColumnas[8])
            ->setCellValue('J3',  $titulosColumnas[9])
            ->setCellValue('K3',  $titulosColumnas[10])
            ->setCellValue('L3',  $titulosColumnas[11])
            ->setCellValue('M3',  $titulosColumnas[12]);
	$i = 4;    
   while ($registro = mysql_fetch_object ($resultado)) {
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, $registro->id)
            ->setCellValue('B'.$i, $registro->fecha)
            ->setCellValue('C'.$i, $registro->nombre)
            ->setCellValue('D'.$i, $registro->correo)
            ->setCellValue('E'.$i, $registro->departamento)
            ->setCellValue('F'.$i, $registro->ciudad)
            ->setCellValue('G'.$i, $registro->telefono)
            ->setCellValue('H'.$i, $registro->celular)
            ->setCellValue('I'.$i, $registro->cultivo)
            ->setCellValue('J'.$i, $registro->etapas)
            ->setCellValue('K'.$i, $registro->empresa)
            ->setCellValue('L'.$i, $registro->fertilizante)
            ->setCellValue('M'.$i, $registro->informacion);
  
      $i++;
       
   }
   $estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Verdana',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>16,
	            	'color'     => array(
    	            	'rgb' => 'FFFFFF'
        	       	)
            ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('rgb' => '87af3b')
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => TRUE
    		)
        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true,                          
                'color'     => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('rgb' => '87af3b')
			),
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Arial',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
        ));

    $objPHPExcel->getActiveSheet()->getStyle('A1:M1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A3:M3')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:M4".($i-1));    

   for($i = 'A'; $i <= 'M'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
}
// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Registro');
// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="registros-ciamsa.xls"');
header('Cache-Control: max-age=0');
 
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close ();
