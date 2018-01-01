<?php

namespace App\Controllers;

use Core\View;
use App\Models\Homey;


/**
 * Home controller from codefii
 *
 * PHP version 7.1
 */
class Homes extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        /*
        View::render('Home/index.php', [
            'name'    => 'Prince',
            'colours' => ['red', 'green', 'blue']
        ]);
        */
        $home = Homey::getAll();

        View::render('Home/index.php', [
            'name'    => 'Prince Darlington',
            'colours' => ['monday', 'tuesday', 'wednesday']
        ]);
    }
    public function aboutAction()
    {
        echo"hello";
    }
}
