<?php
function redirectTwo()
{

    if ( ! isset ( $_GET['tipo'] ) )
    {
        header("Location:index.php");
    }
}
function redirectOne()
{
    if ( ! isset ( $_GET['home'] ) )
    {
        header("Location:index.php");
    }
}
