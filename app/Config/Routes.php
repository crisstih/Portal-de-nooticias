<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login', ['filter' => 'noauth']);
$routes->get('registro', 'Home::registro', ['filter' => 'noauth']);


//rutas de login y registro
$routes->get('admin', 'Home::login', ['filter' => 'noauth']);
$routes->get('inicio_admin', 'Home::inicio_admin', ['filter' => 'auth'] );
$routes->post('enviarlogin', 'usuario_Controller::auth', ['filter' => 'noauth'] );
$routes->get('logout', 'usuario_Controller::logout', ['filter' => 'auth']);
$routes->get('/registro','Usuario_controller::create', ['filter' => 'noauth']);
$routes->post('enviar-form', 'usuario_controller::formValidation', ['filter' => 'noauth']);


//rutas de noticias
$routes->get('listar_noticias','noticias_Controller::listar_noticias', ['filter' => 'auth']);
$routes->get('nueva_noticia', 'noticias_Controller::nueva_noticia', ['filter' => 'auth']);
$routes->post('agregar_noticia', 'noticias_Controller::agregar_noticia', ['filter' => 'auth']);
$routes->get('editar/(:num)', 'noticias_Controller::editar_noticia/$1', ['filter' => 'auth']);
$routes->post('actualizar', 'noticias_Controller::editar_noticia_validacion', ['filter' => 'auth']);
$routes->get('eliminar/(:num)', 'noticias_Controller::eliminar_noticia/$1', ['filter' => 'auth']);
$routes->get('activar/(:num)', 'noticias_Controller::activar_noticia/$1', ['filter' => 'auth']);
$routes->get('ver_noticia/(:num)', 'noticias_Controller::ver_noticia/$1');


//ruta  usuarios
$routes->get('usuarios', 'usuario_Controller::listar_usuarios', ['filter' => 'auth']);
$routes->get('eliminar_usuario/(:num)', 'usuario_Controller::eliminar_usuario/$1', ['filter' => 'auth']);
$routes->get('activar_usuario/(:num)', 'usuario_Controller::activar_usuario/$1', ['filter' => 'auth']);
$routes->get('editar_usuario/(:num)', 'usuario_Controller::editar_usuario/$1', ['filter' => 'auth'] );
$routes->post('update', 'usuario_Controller::update', ['filter' => 'auth'] );






/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
