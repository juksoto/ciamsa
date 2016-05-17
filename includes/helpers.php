<?php

function redirectOne()
{
    if ( ! isset ( $_GET['home'] ) )
    {
        header("Location:index.php");
    }
}
function redirectTwo()
{

    if ( ! isset ( $_GET['tipo'] ) )
    {
        header("Location:index.php");
    }
}
function redirectThree()
{
    if ( ! isset ( $_GET['tipo'] ) )
    {
        header("Location:index.php");
    }
    if ( ! isset ( $_GET['etapa'] ) )
    {
        header("Location:index.php");
    }
}
function redirectSend()
{
    if (!$_POST)
    {
        header("Location:index.php");
    }
}


