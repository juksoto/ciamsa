<?php
$sql = "SELECT * FROM productos WHERE active = 1";

if ($result = $mysqli -> query ($sql) ) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result -> num_rows;
    if ($row_cnt > 0)
    {
        while ($R = $result -> fetch_array())
        {
            ?>
            <li class ="column text-center" >
                <a href="step-three.php?tipo=<?=$tipo ?>&etapa=<?= $R['id'] ?>">
                    <img src="<?= $R['logo'] ?>" alt="<?= $R['nombre_product'] ?>"">
                </a>
            </li>
            <?php
        }
    }
    /* cerrar el resultset */
    $result -> close();
}

?>