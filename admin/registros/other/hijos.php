<?php
/**
 * Autor: Lucas Forchino
 * Web: http://www.tutorialjquery.com
 *
 */
include_once ("clase.php");// incluyo las clases a ser usadas
$action='index';
if(isset($_POST['action']))
{$action=$_POST['action'];}


$view= new stdClass(); // creo una clase standard para contener la vista
$view->disableLayout=false;// marca si usa o no el layout , si no lo usa imprime directamente el template

// para no utilizar un framework y simplificar las cosas uso este switch, la idea
// es que puedan apreciar facilmente cuales son las operaciones que se realizan
switch ($action)
{
    case 'index':
        $idUsuario=$_GET['id'];
        $view->hijos=Hijos::getHijos($idUsuario); // trae todos los usuarios
        $view->contentTemplate="templates/hijosGrid.php"; // seteo el template que se va a mostrar
        break;
    case 'refreshGrid':
        $view->disableLayout=true; // no usa el layout
        $view->hijos=Hijos::getHijos();
        $view->contentTemplate="templates/hijosGrid.php"; // seteo el template que se va a mostrar
        break;
    case 'saveUsuario':
        // limpio todos los valores antes de guardarlos
        // por ls dudas venga algo raro
        $id=intval($_POST['id']);
        $nombre=cleanString($_POST['nombre']);
        $identificacion=cleanString($_POST['identificacion']);
        $email=cleanString($_POST['email']);
        $telefono=cleanString($_POST['telefono']);
        $nombreHijo=cleanString($_POST['nombreHijo']);
        $fechaNacimiento=cleanString($_POST['fechaNacimiento']);
        $ciudad=cleanString($_POST['ciudad']);

        $usuarios=new Usuarios($id);
        $usuario->setNombre($nombre);
        $usuario->setIdentificacion($identificacion);
        $usuario->setEmail($email);
        $usuario->setTelefono($telefono);
        $usuario->setNombreHijo($nombreHijo);
        $usuario->setTelefono($telefono);
        $usuario->setTelefono($telefono);

        $usuario->save();
        break;
    case 'newUsuario':
        $view->usuario=new Usuarios();
        $view->label='Nuevo Usuario';
        $view->disableLayout=true;
        $view->contentTemplate="templates/usuarioForm.php"; // seteo el template que se va a mostrar
        break;
    case 'editUsuario':
        $editId=intval($_POST['id']);
        $view->label='Editar Usuario';
        $view->usuario=new Usuarios($editId);
        $view->disableLayout=true;
        $view->contentTemplate="templates/usuarioForm.php"; // seteo el template que se va a mostrar
        break;
    case 'deleteUsuario':
        $id=intval($_POST['id']);
        $usuari=new Usuarios($id);
        $usuari->delete();
        die; // no quiero mostrar nada cuando borra , solo devuelve el control.
        break;

    default :
}

// si esta deshabilitado el layout solo imprime el template
if ($view->disableLayout==true)
{include_once ($view->contentTemplate);}
else
{include_once ('templates/layout.php');} // el layout incluye el template adentro
