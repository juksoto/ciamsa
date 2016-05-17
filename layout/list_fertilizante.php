<?php

    if ( isset ( $_GET['tipo'] ) )
    {
        $tipo = $_GET['tipo'];
    }
    if ( isset ( $_GET['etapa'] ) )
    {
        $etapa = $_GET['etapa'];
    }

    $sql = "
    SELECT 
        cer.*,
        r.id,
        r.nombre_referencia,
        r.componentes,
        r.image,
        r.productos_id,
        p.nombre_producto
    FROM
       cultivo_etapas_referencias cer
    INNER JOIN
      referencia r
    ON
      cer.referencia_id = r.id
    INNER JOIN
      productos p
     ON
     r.productos_id = p.id
     WHERE
     cer.etapas_cultivo_id = $etapa
     AND 
     cer.tipo_cultivo_id = $tipo
     AND
     r.active = 1
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
                // nombre de la carpeta donde esta las imagenes de los productos
                if ($R['productos_id'] == 1)
                {
                    $url_image_product = "forkamix";
                }
                if ($R['productos_id'] == 2)
                {
                    $url_image_product = "nutrikimia";
                }
                if ($R['productos_id'] == 3)
                {
                    $url_image_product = "nitroeffi";
                }
                if ($R['productos_id'] == 4)
                {
                    $url_image_product = "simples";
                }

                ?>

                <li class="column text-center etapa-<?php echo $etapa ?> tipo-<?php echo $tipo ?>"  data-id="<?php echo $R['id'] ?>" data-etapa="<?php echo $etapa ?>" data-tipo="<?php echo $tipo ?>">
                    <a data-open="modalProductos" class="btnReferencia" >
                        <img src="images/referencias/<?php echo $url_image_product . "/". $R["image"] ?>.png" alt="<?= $R["nombre_referencia"] ?>">
                        <h4>
                            <?= $R["nombre_referencia"] ?>
                        </h4>
                    </a>

                </li>
                <?php
            }
        }
        else{
            ?>
                <div class="alert danger" data-closable>
                    No hay productos para estas especificaciones.

                </div>
        <?php
        }

        /* cerrar el resultset */
        $result -> close();
    }

    if (!$mysqli -> query ($sql)) {
        printf("Errormessage: %s\n", $mysqli -> error);
    }

    ?>