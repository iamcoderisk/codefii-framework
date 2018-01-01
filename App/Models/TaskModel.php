<?php

namespace App\Models;

use Core\Parts\Hash;
use Core\Parts\Model;

class TaskModel extends Model
{
  public static function addTasks($title,$content)
  {
    $user = Model::getDb()->insertInTo('tasks',array(
      'title'=>$title,
      'content'=>$content
    ));
    
  }
}
