<?php

/**
 * Front controller
 *
 * PHP version 5.4
 */

/**
 * Composer
 */
require '../vendor/autoload.php';


/**
 * Twig
 */
// Twig_Autoloader::register();


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->point('', ['controller' => 'Home', 'action' => 'index']);
$router->point('{controller}/{action}');
$router->point('{controller}/{id:\d+}/{action}');
$router->point('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);
