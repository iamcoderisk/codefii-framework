<?php
/******/
namespace App\Controllers;
use Core\Controller;
use Core\View;
use Core\Parts\Add;
use App\Models\TaskModel;
use Core\Parts\Validate;
class TaskController extends Controller
{

  public function indexAction()
  {
    View::render('Tasks/index.php');
  }

public function createAction()
{
  if(Add::exists())
  {
    //call the addTasks method
    $validate = new Validate();

  // $add = TaskModel::addTasks(Add::get('title'),Add::get('content'));

  }
}
public function viewAction()
{
  View::render('Taks/view.php');
}

}
