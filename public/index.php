<?php
namespace App;

//Inicio de sesión
session_start();

//Controladores a precargar
use App\Controller\AppController;
use App\Controller\NoticiaController;
use App\Controller\UsuarioController;

//Variables de sesión con las rutas para la carpeta public y para la home
$_SESSION['public'] = '/cms_propio/public/';
$_SESSION['home'] = $_SESSION['public'].'index.php/';

//función de autoload
spl_autoload_register('App\autoload');

function autoload($clase,$dir=null){

    if (is_null($dir)){
        $dirname = str_replace('/public', '', dirname(__FILE__));
        $dir = realpath($dirname);
    }

    foreach (scandir($dir) as $file){
        if (is_dir($dir."/".$file) AND substr($file, 0, 1) !== '.'){
            autoload($clase, $dir."/".$file);
        }
        else if (is_file($dir."/".$file) AND $file == substr(strrchr($clase, "\\"), 1).".php"){
            require($dir."/".$file);
        }
    }

}

//Función para el controlador
function controlador($nombre=null){

    switch($nombre){
        default: return new AppController;
        case "noticias": return new NoticiaController;
        case "usuarios": return new UsuarioController;
    }

}

//Switch para decidir la vista que mostrará el navegador
$ruta = str_replace($_SESSION['home'], '', $_SERVER['REQUEST_URI']);

switch ($ruta){

    //Front-end
    case "":
    case "/":
        controlador()->index();
        break;
    case "acerca-de":
        controlador()->acercade();
        break;
    case "noticias":
        controlador()->noticias();
        break;
    case (strpos($ruta,"noticia/") === 0):
        controlador()->noticia(str_replace("noticia/","",$ruta));
        break;

    //Back-end
    case "admin":
    case "admin/entrar":
        controlador("usuarios")->entrar();
        break;
    case "admin/salir":
        controlador("usuarios")->salir();
        break;
    case "admin/usuarios":
        controlador("usuarios")->index();
        break;
    case "admin/usuarios/crear":
        controlador("usuarios")->crear();
        break;
    case (strpos($ruta,"admin/usuarios/editar/") === 0):
        controlador("usuarios")->editar(str_replace("admin/usuarios/editar/","",$ruta));
        break;
    case (strpos($ruta,"admin/usuarios/activar/") === 0):
        controlador("usuarios")->activar(str_replace("admin/usuarios/activar/","",$ruta));
        break;
    case (strpos($ruta,"admin/usuarios/borrar/") === 0):
        controlador("usuarios")->borrar(str_replace("admin/usuarios/borrar/","",$ruta));
        break;
    case "admin/noticias":
        controlador("noticias")->index();
        break;
    case "admin/noticias/crear":
        controlador("noticias")->crear();
        break;
    case (strpos($ruta,"admin/noticias/editar/") === 0):
        controlador("noticias")->editar(str_replace("admin/noticias/editar/","",$ruta));
        break;
    case (strpos($ruta,"admin/noticias/activar/") === 0):
        controlador("noticias")->activar(str_replace("admin/noticias/activar/","",$ruta));
        break;
    case (strpos($ruta,"admin/noticias/home/") === 0):
        controlador("noticias")->home(str_replace("admin/noticias/home/","",$ruta));
        break;
    case (strpos($ruta,"admin/noticias/borrar/") === 0):
        controlador("noticias")->borrar(str_replace("admin/noticias/borrar/","",$ruta));
        break;
    case (strpos($ruta,"admin/") === 0):
        controlador("usuarios")->entrar();
        break;

    //Resto de rutas
    default:
        controlador()->index();

}
