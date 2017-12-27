<?php

namespace App\Controllers;

use \Core\View;
use App\Models\AddPost;

/**
 * Posts controller
 *
 * PHP version 5.4
 */
class AddPosts extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {

    }
    public function postAction(){
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $info = AddPost::addInfo($_POSTisset($_POST['submit'])['title'],$_POST['content']);
            // $name =$_POST['title'];
            // $content = $_POST['content'];
            // $info = AddPost::addInfo($_POST['title'],$_POST['content']);

        }
        View::render('Add/index.php');
    }

}
