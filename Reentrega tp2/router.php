<?php
require_once './.controller/auth.controller.php';
require_once './.controller/page.controller.php';
require_once './.controller/subscripciones.controller.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'miPerfil';
if (!empty ($_GET['action'])){
    $action = $_GET['action'];
};

$params = explode('/' , $action);

switch($params[0]){
    case 'registro':
        $controller = new authController();
        $controller -> MostrarRegistro();
        break;
    case 'registrar':
        $controller = new authController();
        $controller -> registrar();
        break;
    case 'inicioSesion':
        $controller = new authController();
        $controller -> mostrarInicio();
        break;
    case 'iniciar':
        $controller = new authController();
        $controller -> iniciarSesion();
        break;
    case 'cerrarSesion':
        $controller = new authController();
        $controller -> cerrarSesion();
        break;
    case 'miPerfil':
        $controller = new pageController();
        $controller -> mostrarMiPerfil();
        break;
    case 'cambiarNombre':
        $controller = new pageController();
        $controller -> cambiarNombre();
        break;
    case 'verSuscripciones':
        $controller = new subscripcionesController();
        $controller->ShowSubs();
        break;
    case 'eliminarSub':
        $controller = new subscripcionesController();
        $controller->eliminarSub();
        break;
    case 'agregarSub':
        $controller = new subscripcionesController();
        $controller->agregarSub();
        break;
    case 'filtro':
        $controller = new subscripcionesController();
        $controller->filtrar();
        break;
    case 'verSocios':
        $controller = new pageController();
        $controller->mostrarSocios();
        break;
    case 'eliminarSocio':
        $controller = new pageController();
        $controller->eliminarSocio();
        break;
    case 'hacerAdmin':
        $controller = new pageController();
        $controller->hacerAdmin();
        break;
    case 'quitarAdmin':
        $controller = new pageController();
        $controller->quitarAdmin();
        break;
    case 'verNoticias':
        $controller = new pageController();
        $controller->mostrarNoticias();
        break;
    default;
        echo 'error404';
}