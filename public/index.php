<?php

/**
 * Front controller
 *
 * PHP version 5.4
 */

/**
 * Composer
 */


spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);   // get the parent directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});
// require '../vendor/autoload.php';
require '../Core/Routes.php';

/**
 * Twig
 */
// Twig_Autoloader::register();


/**
 * Routing
 */
