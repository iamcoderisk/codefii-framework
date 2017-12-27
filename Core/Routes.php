<?php


$router = new Core\Helpers\Router();

// Add the routes
$router->routes('', ['controller' => 'Home', 'action' => 'index']);
$router->routes('{controller}/{action}');
$router->routes('{controller}/{action}/{id:\d+}');
$router->routes('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->routes('add',['controller'=>'AddPosts','action'=>'post']);
$router->dispatch($_SERVER['QUERY_STRING']);
