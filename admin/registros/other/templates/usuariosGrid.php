<div class="bar">
    <a id="new" class="button" href="javascript:void(0);">Nuevo Usuario</a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Identificación</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Hijo</th>
            <th>Configurar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($view->usuarios as $usuario):  // uso la otra sintaxis de php para templates ?>
            <tr>
                <td><?php echo $usuario['id'];?></td>
                <td><?php echo $usuario['nombre'];?></td>
                <td><?php echo $usuario['identificacion'];?></td>
                <td><?php echo $usuario['email'];?></td>
                <td><?php echo $usuario['telefono'];?></td>
                <td><a class="hijos" href="index.php?id=<?php echo $usuario['id'];?>&nombre=<?php echo $usuario['nombre'];?>" data-id="<?php echo $usuario['id'];?>">Información Hijo</a></td>
                <td><a class="edit" href="javascript:void(0);" data-id="<?php echo $usuario['id'];?>">Editar</a>
                    <a class="delete" href="javascript:void(0);" data-id="<?php echo $usuario['id'];?>">Borrar</a>
                </td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>