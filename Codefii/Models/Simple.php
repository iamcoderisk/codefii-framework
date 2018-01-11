<?php

namespace Codefii\Models;
use Core\Parts\Model;


class Simple extends Model 
{
    public static function AddUser($title,$content)
    {
        $user = Model::getDb()->insertInTo('simple',array(
            'firstname'=>$title,
            'lastname'=>$content
          ));
      
    
    }
}