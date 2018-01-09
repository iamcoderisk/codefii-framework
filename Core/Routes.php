<?php


$router = new Core\Helpers\Router();

// Add the routes
$router->routes('', ['controller' => 'TaskController', 'action' => 'index']);//this is the default routes
// $router->routes('task',['controller'=>'TaskController','action'=>'index']);
// $router->routes('task/create',['controller'=>'TaskController','action'=>'create']);

$router->routes('/about/*',['controller'=>'Homes','action'=>'about']);
$router->routes('{controller}/{action}');
$router->routes('{controller}/{action}/{id:\d+}');
$router->routes('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->dispatch($_SERVER['QUERY_STRING']);//don't touch this line
