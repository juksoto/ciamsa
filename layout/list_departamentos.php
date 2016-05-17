<?php
$sql = "SELECT * FROM departamentos WHERE active = 1";

if ($result = $mysqli -> query ($sql) ) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result -> num_rows;
    if ($row_cnt > 0)
    {
        while ($R = $result -> fetch_array())
        {
            ?>
            <option value ="<?= $R['id']?>" ><?= $R['departamento']?> </option>
            <?php
        }
    }
    /* cerrar el resultset */
    $result -> close();
}

?>