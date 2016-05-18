<?php
/**
 * Autor: Lucas Forchino
 * Web: http://www.tutorialjquery.com
 *
 */
include_once ("clase.php");// incluyo las clases a ser usadas
$action='index';
$title="Inscripciones Red Juvenil Coomeva";
if(isset($_POST['action']))
{$action=$_POST['action'];}

if(isset($_GET['id']))
{$action='hijos';
$title="Registro de Hijos de " .$_GET['nombre'];
}


$view= new stdClass(); // creo una clase standard para contener la vista
$view->disableLayout=false;// marca si usa o no el layout , si no lo usa imprime directamente el template

// para no utilizar un framework y simplificar las cosas uso este switch, la idea
// es que puedan apreciar facilmente cuales son las operaciones que se realizan
switch ($action)
{
    case 'index':
        $view->usuarios=Usuarios::getUsuarios(); // trae todos los usuarioss
        $view->contentTemplate="templates/usuariosGrid.php"; // seteo el template que se va a mostrar
        break;
     case 'hijos':
        $idUser=$_GET['id'];
        $view->idUsuario=$idUser;
        $view->hijos=Hijos::getHijos($idUser); // trae todos los usuarios
        $view->contentTemplate="templates/hijosGrid.php"; // seteo el template que se va a mostrar
        break;
    case 'refreshGrid':
        $view->disableLayout=true; // no usa el layout
        $view->usuarios=Usuarios::getUsuarios();
        $view->contentTemplate="templates/usuariosGrid.php"; // seteo el template que se va a mostrar
        break;
    case 'refreshGridHijos':
        $view->disableLayout=true; // no usa el layout
        $view->idPadre=$_POST['idPadre'];
        $view->hijos=Hijos::getHijos($view->idPadre); // trae todos los usuarios
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

        $usuario=new Usuarios($id);
        $usuario->setNombre($nombre);
        $usuario->setIdentificacion($identificacion);
        $usuario->setEmail($email);
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
    case 'saveHijos':
        // limpio todos los valores antes de guardarlos
        // por ls dudas venga algo raro
        echo "<script>alert('hola')</script>";
        $idHijo=intval($_POST['idHijo']);;
        $idUsuario=intval($_POST['idUsuario']);
        $nombreHijo=cleanString($_POST['nombreHijo']);
        $fechaNacimiento=cleanString($_POST['fechaNacimiento']);
        $ciudad=cleanString($_POST['ciudad']);

        $hijo=new Hijos($idHijo,$idUsuario);
        $hijo->setNombreHijo($nombreHijo);
        $hijo->setEdad($fechaNacimiento);
        $hijo->setFechaNacimiento($fechaNacimiento);
        $hijo->setCiudad($ciudad);

        $hijo->saveHijos();
        break;
    case 'newHijos':
        $userID=intval($_POST['idUser']);
        $view->hijos=new Hijos("",$userID);
        $view->label='Agregar nuevo hijo';
        $view->disableLayout=true;
        $view->contentTemplate="templates/hijoForm.php"; // seteo el template que se va a mostrar
        break;
    case 'editHijos':
        $editId=intval($_POST['id']);
        $idUser=intval($_POST['idUser']);
        $view->label='Editar Hijos';
        $view->hijos=new Hijos($editId, $idUser);
        $view->disableLayout=true;
        $view->contentTemplate="templates/hijoForm.php"; // seteo el template que se va a mostrar
        break;
    case 'deleteUsuario':
        $id=intval($_POST['id']);
        $usuari=new Usuarios($id);
        $usuari->delete();
        die; // no quiero mostrar nada cuando borra , solo devuelve el control.
        break;
    case 'deleteHijos':
        $id=intval($_POST['id']);
        $hijo=new Hijos($idHijo);
        $h->delete();
        die; // no quiero mostrar nada cuando borra , solo devuelve el control.
        break;

    default :
}

// si esta deshabilitado el layout solo imprime el template
if ($view->disableLayout==true)
{include_once ($view->contentTemplate);}
else
{include_once ('templates/layout.php');} // el layout incluye el template adentro
