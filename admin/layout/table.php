    <table class="table">
        <tr>
            <td>
                id
            </td>
            <td>
                Cultivo
            </td>
            <td>
                Etapa del cultivo
            </td>
            <td>
                Producto
            </td>
            <td>
                Referencia
            </td>
        </tr>

    <?php
    $sql = "
    SELECT 
        c.cultivo,
        e.etapas,
        r.nombre_referencia,
        p.nombre_producto,
        cer.id
    FROM
       cultivo_etapas_referencias cer
    INNER JOIN
      tipo_cultivo c
    ON
      cer.tipo_cultivo_id = c.id
    INNER JOIN
      etapas_cultivo e
    ON
      cer.etapas_cultivo_id = e.id
    INNER JOIN
      referencia r
    ON
      cer.referencia_id = r.id
    INNER JOIN
      productos p
    ON
     r.productos_id = p.id
     ORDER BY
     r.nombre_referencia ASC
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
                <?= $R["cultivo"] ?>
            </td>
            <td>
                <?= $R["etapas"] ?>
            </td>
            <td>
                <?= $R["nombre_referencia"] ?>
            </td>
            <td>
                <?= $R["nombre_producto"] ?>
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
    </table>
