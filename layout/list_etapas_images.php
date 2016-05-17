<?php
$sql = "SELECT * FROM etapas_cultivo WHERE active = 1";
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
            <li class ="column text-center cultivo-<?= $R['id'] ?>"  >
                <a href="step-three.php?tipo=<?=$tipo ?>&etapa=<?= $R['id'] ?>">
                    <img src="<?= $R['imagen'] ?>" alt="" class="animate-<?= $R['id'] ?>">
                    <h3>
                        <?= $R["etapas"]; ?>
                        </h3>
                        <?php
                            if (isset($R['subline'])){
                                ?> <p class="subline"> <?= $R['subline'] ?></p>
                            <?php
                            }
                            ?>
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