<div class="bar">
    <a id="newHijos" class="button" href="javascript:void(0);">Inscribir un Hijo</a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>nombreHijo</th>
            <th>Edad</th>
            <th>Fecha Nacimiento</th>
            <th>Ciudad</th>
            <th>Configurar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($view->hijos as $hijo):  // uso la otra sintaxis de php para templates ?>
            <tr>
                <td><?php echo $hijo['idHijo'];?></td>
                <td><?php echo $hijo['nombreHijo'];?></td>
                <td><?php echo $hijo['edad'];?></td>
                <td><?php echo $hijo['fecha'];?></td>
                <td><?php echo $hijo['ciudad'];?></td>
                <td><a class="editHijos" href="javascript:void(0);" data-id="<?php echo $hijo['idHijo'];?>">Editar</a>
                    <a class="deleteHijos" href="javascript:void(0);" data-id="<?php echo $hijo['idHijo'];?>">Borrar</a>
                </td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>