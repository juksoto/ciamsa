<h2><?php echo $view->label ?></h2>
<form name ="hijos" id="hijos" method="POST" action="index.php" data-abide>
    <input type="hidden" name="idHijo" id="idHijo" value="<?php print $view->hijos->getIdHijo() ?>">
     <input type="hidden" name="idUsuario" id="idUsuario" value="<?php $id=intval($_POST['idUser']); echo $id;?>">
    <div class="name-field">
                <label>Nombre del Niño(a)<small>*</small>
                  <input type="text" required placeholder="Ingrese el nombre del Niño(a)" name="nombreHijo" id="nombreHijo" value = "<?php print $view->hijos->getNombreHijo() ?>">
                </label>
                <small class="error">Ingrese el nombre del Niño(a) </small>
          </div>

    <div class="date-field">
                <label>Fecha de Nacimiento <small>*</small>
                  <input type="date" required name="fecha" id="fecha" placeholder="YYYY-MM-DD" value = "<?php print $view->hijos->getFechaNacimiento() ?>">
                </label>
                <small class="error">Ingrese la fecha de nacimiento YYYY-MM-DD</small>
            </div>

             <div class="city-field">
                <label>Ciudad<small>*</small>
                 <select name="ciudad" id="ciudad"  class="radius" required > 
                    <?php
                    $ciudad=$view->hijos->getCiudad();
                    ?>
                     
                        <option  value <?php if ($ciudad==""){echo "selected";} ?>>Seleccionar una ciudad</option>       
                        <option value="Barranquilla" <?php if ($ciudad=="Barranquilla"){echo "selected";} ?>>Barranquilla</option>      
                        <option value="Bogotá" <?php if ($ciudad=="Bogotá"){echo "selected";} ?> >Bogotá</option>     
                        <option value="Cartagena"<?php if ($ciudad=="Cartagena"){echo "selected";} ?>>Cartagena</option>        
                        <option value="Cali" <?php if ($ciudad=="Cali"){echo "selected";} ?>>Cali</option>      
                        <option value="Ibagué" <?php if ($ciudad=="Ibagué"){echo "selected";} ?>>Ibagué</option>      
                        <option value="Manizales" <?php if ($ciudad=="Manizales"){echo "selected";} ?>>Manizales</option>        
                        <option value="Medellín" <?php if ($ciudad=="Medellín"){echo "selected";} ?> >Medellín</option>     
                        <option value="Palmira" <?php if ($ciudad=="Palmira"){echo "selected";} ?>>Palmira</option>        
                        <option value="Pasto" <?php if ($ciudad=="Pasto"){echo "selected";} ?>>Pasto</option>        
                        <option value="Pereira" <?php if ($ciudad=="Pereira"){echo "selected";} ?>>Pereira</option>        
                        <option value="Popayán" <?php if($ciudad=="Popayán"){echo "selected";} ?>>Popayán</option>        
                        <option value="Sogamoso" <?php if ($ciudad=="Sogamoso"){echo "selected";} ?>>Sogamoso</option>      
                        <option value="Tuluá" <?php if ($ciudad=="Tuluá"){echo "selected";} ?> >Tuluá</option>            
                </select>
                </label>
                <small class="error">Escoja una ciudad</small>
            </div>

    <div class="buttonsBar">
        <input id="cancel" type="button" value ="Cancelar" />
        <input id="submit" type="submit" name="submit" value ="Guardar" />
    </div>
</form>
