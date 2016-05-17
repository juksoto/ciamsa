<?php
$sql = "SELECT * FROM etapas_cultivo WHERE active = 1";

if(isset($_GET['etapa']))
{
    $etapa = $_GET['etapa'];
}
if ($result = $mysqli -> query ($sql) ) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result -> num_rows;
    if ($row_cnt > 0)
    {
        while ($R = $result -> fetch_array())
        {
            ?>
            <option value="<?= $R['id'] ?>|<?= $R['etapas'] ?>" <?php if( isset($etapa) and ($etapa == $R['id']) ) { echo "selected"; } ?> >
                <?= $R['etapas'] ?>
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