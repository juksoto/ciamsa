<?php
$sql = "SELECT * FROM tipo_cultivo WHERE active = 1";

if(isset($_GET['tipo']))
{
    $tipo = $_GET['tipo'];
}

if ($result = $mysqli -> query ($sql) ) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result -> num_rows;
    if ($row_cnt > 0)
    {
        while ($R = $result -> fetch_array())
        {
            ?>
            <option value="<?= $R['id'] ?>|<?= $R['cultivo'] ?>" <?php if( isset($tipo) and ($tipo == $R['id']) ) { echo "selected"; } ?> >
                <?= $R['cultivo'] ?>
            </option>
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