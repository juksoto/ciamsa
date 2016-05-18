<h2><?php echo $view->label ?></h2>
<form name ="usuario" id="usuario" method="POST" action="index.php" data-abide>
    <input type="hidden" name="id" id="id" value="<?php print $view->usuario->getId() ?>">
    <div>
        <label>Nombre del Asociado o Acudiente<small>*</small>
        <input type="text" required placeholder="Ingrese su nombre" name="nombre" id="nombre" value = "<?php print $view->usuario->getNombre() ?>">
        </label>
                <small class="error">Ingrese el nombre del Asociado </small>
    </div>
    <div>
          <label>Nro. Identificación<small>*</small>
         <input type="text" required placeholder="Ingrese su Nº Identificación"  name="cc" id="identificacion" value = "<?php print $view->usuario->getIdentficacion() ?>">
         </label>
                <small class="error">Ingrese el Nº Identificación </small>
    </div>
    <div>
        <label>Email <small>*</small>
                  <input type="email" required name="email" id="email" placeholder="Ingrese un email" value = "<?php print $view->usuario->getEmail() ?>">
                  </label>
                <small class="error">Ingrese un email válido </small>
    </div>
    <div>
        <label>Celular<small>*</small>
         <input type="text" name="telefono" id="telefono" placeholder="Ingrese un teléfono o celular" required value = "<?php print $view->usuario->getTelefono() ?>">
         </label>
                <small class="error">Ingrese un Nro. celular </small>
    </div>
    <div>

    <div class="buttonsBar">
        <input id="cancel" type="button" value ="Cancelar" />
        <input id="submit" type="submit" name="submit" value ="Guardar" />
    </div>
</form>
