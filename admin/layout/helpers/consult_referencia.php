<?php
$sql = "
    SELECT 
      r.nombre_referencia, p.nombre_producto, r.id
    FROM 
      referencia r
    INNER JOIN
      productos p 
    ON
       r.productos_id = p.id
    WHERE 
      r.active = 1
    ";

if ($result = $mysqli -> query ($sql) ) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result -> num_rows;

    if ($row_cnt > 0)
    {
        while ($R = $result -> fetch_array())
        {
            ?>
            <option value =" <?= $R["id"] ?>"><?php echo  $R["nombre_referencia"] . " - ". $R["nombre_producto"] ?> </option>
            <?php
        }
    }
    else{
        echo "No hay registros";
    }

    /* cerrar el resultset */
    $result -> close();
}

?>