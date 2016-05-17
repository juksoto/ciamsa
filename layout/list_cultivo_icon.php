<?php
    $sql = "SELECT * FROM tipo_cultivo WHERE active = 1";
    if ($result = $mysqli -> query ($sql) ) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result -> num_rows;
    if ($row_cnt > 0)
    {
    while ($R = $result -> fetch_array())
    {
    ?>
    <li class ="column icon-cultivo text-center" >
        <a href="step-two.php?tipo=<?= $R['id'] ?>">
            <img src="<?= $R['icono'] ?>" alt="">
            <h3>
                <?= $R["cultivo"]?>
            </h3>
        </a>

    </li>
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