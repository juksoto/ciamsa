<?php
if (isset($_GET['tipo']))
{
    $url ="?tipo=" . $_GET['tipo'];
    if (isset($_GET['etapa']))
    {
        $url =$url."&etapa=" . $_GET['etapa'];
    }
}
?>
<nav>
    <section class="row text-small-only-center">
        <article class="small-12 medium-3 column ">
            <a href="">
                <img src="images/logo-ciamsa.png" alt="" width="180px" class ="logo">
            </a>
        </article>
        <section class="small-12 medium-9 column text-medium-right btn-header">
            <a href="index.php" class="button btn-sunflower"> <span class="icon-home" aria-hidden="true"></span> Inicio</a>
            <a href="step-two.php<?php if( isset ( $url ) ) { echo $url; } ?>" class="button btn-aqua"> <span class="icon-back" aria-hidden="true" style="padding-top:5px"></span> Regresar</a>
            <a href="cotizar.php<?php if( isset ( $url ) ) { echo $url; } ?>" class="button btn-ciamsa"> <span class="icon-user" aria-hidden="true"></span> Solicitar cotización</a>
        </section>
    </section>
</nav>