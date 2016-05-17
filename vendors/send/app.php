<?php 
	require("class.phpmailer.php");
    $mail = new PHPMailer();
	if($_POST){

		$nombre         = $_POST['nombre'];
		$correo         = $_POST['email'];
		$departamento   = $_POST['departamento'];
		$ciudad         = $_POST['ciudad'];
		$telefono       = $_POST['telefono'];
		$celular        = $_POST['celular'];
		$tipo_cultivo   = $_POST['tipo_cultivo'];
        $etapa_cultivo  = $_POST['etapa_cultivo'];
        $forkamix       = $_POST['forkamix'];
        $mensaje        = $_POST['mensaje'];


        //Variable que debe decir "Ciamsa App, esto es para robots o spammer
        $direccion     = $_POST['direccion'];
        $persona       = $_POST['persona'];

		//Fecha Actual
		date_default_timezone_set('UTC');
        //Imprimimos la fecha actual dandole un formato
        $creado= date("Y-m-d");

		//Validacion anti spam hotspot
		if( empty( $_POST['$direccion'])){
			
			if($persona=="ciamsa app"){
			// Inserta los nuevos datos


                $sql = '
              INSERT INTO
              usuario (nombre, correo, ciudad, telefono, celular, fertilizante, informacion, tipo_cultivo_id, etapas_cultivo_id, departamentos_id ) 
              VALUES 
              ("'.$nombre.'","'.$correo.'","'.$ciudad.'","'.$telefono.'","'.$celular.'", "'.$forkamix.'","'.$mensaje.'" ,"'.$tipo_cultivo.'","'.$etapa_cultivo.'","'.$departamento.'")';
                
                if ($mysqli -> query ($sql) == true ) {
                    $Fecha = date("d-M-y H:i");
                    $asunto=" Solicitud cotizacion - CIAMSA Aplicacion";
                    $mail->Host = "localhost";
                    $mail->From = $correo;
                    $mail->IsHTML(TRUE);
                    $mail->FromName = $nombre;
                    $mail->Subject = $asunto;
                    $mail->AddAddress("juksoto@gmail.com");
                    //$mail->AddCC("info@contactovirtual.net");
                    //$mail->AddAddress("juksoto@gmail.com");
                    //$mail->AddBCC("usuariocopiaoculta@correo.com");
                    $body = ' 
                            <h1>CIAMSA: Conozca el producto para nutrir su cultivo </h1> 
                            <p> 
                            Esta persona - "'.$nombre .'" ha solicitado una cotización.
                            </p> 
                            <p>Su solicitud fue la siguiente:</p>
                            <p><b>Fecha de la solicitud:</b>'.$creado.'</p>
                            <p><b>Nombre:</b>'.$nombre.'</p>
                            <p><b>Correo:</b>'.$correo.'</p>
                            <p><b>Departamento:</b>'.$departamento.'</p>
                            <p><b>Departamento:</b>'.$departamento.'</p>
                            <p><b>Ciudad:</b>'.$ciudad.'</p>
                            <p><b>Teléfono:</b>'.$telefono.'</p>
                            <p><b>Tipo de cultivo:</b>'.$tipo_cultivo.'</p>
                            <p><b>Etapa del cultivo:</b>'.$etapa_cultivo.'</p>
                            <p><b>¿Deseo forkamix mexcla a la medida?:</b>'.$forkamix.'</p>
                            <p><b>Información adicional</b>'.$mensaje.'</p>

                            <br/><br/>
                            <p>CIAMSA</p>';

                    $mail->Body = utf8_decode($body);
                    $mail->AltBody = $asunto;

                    if(!$mail -> Send())
                        {
                         ?>
                            <div class="callout alert-danger" data-closable ="fade-out">
                                <h5>Ha ocurrido un problema</h5>
                                <p>No se ha enviado su mensaje correctamente</p>
                                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        else
                        {
                            ?>
                            <div class="callout alert-success" data-closable ="fade-out">
                                <h5>El envío fue un exito</h5>
                                <p>Su mensaje se ha enviado correctamente.</p>
                                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }
                    }
                else{
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }
                }
            		
			}else{
				//Redirecciona Si ingreso un spammer o un robots
				header ('location:'.$_server['HTTP_REFERER']);
			}
		}else{
			//Redirecciona Si ingreso un spammer o un robots
				header ('location:'.$_server['HTTP_REFERER']);
		}
?>
