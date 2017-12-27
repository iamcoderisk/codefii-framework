<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;
use Core\Helpers\Add;
use Core\Helpers\Validate;
use Core\Helpers\Redirect;

/**
 * Posts controller
 *
 * PHP version 5.4
 */
class Posts extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()

    {

            $allPosts = Post::getAll();
            //
            // echo $allPosts->title

            View::render('Posts/index.php', [
                'posts' => $allPosts
            ]);


    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction()
    {

            if(Add::exists())
            {
                $d = $this->route_params['id'];
            $addInfo = Post::updateInfo(Add::get('name'),$d);
            if($addInfo){
                    Redirect::to('/try/framework/posts/index');
            }

            }


    }

    /**
     * Show the edit page
     *
     * @return void
     */

    public function editAction()
    {
            if($this->route_params)
            {

            View::render('Posts/edit.php',['id'=>$this->route_params['id']]);
            }

    }

    public function new()
    {
      View::renderTemplate('Posts/new.html');
    }
    public function createAction(){
        if(Add::exists())
            {
            $save = Post::saveInfo(Add::get('title'),Add::get('content'));
            if($save){
                Redirect::to('/try/framework/posts/index');
            }
            }
        }
        public function deleteAction()
        {
            $id = $this->route_params['id'];
            $remove = Post::removeNews($id);
            if($remove)
            {
            Redirect::to('/try/framework/posts/index');
            }
        }

}
