<?php

namespace Codefii\Models;
use Core\Parts\Model;
use Core\Parts\Hash;

use Core\Authentication\Auth;

class Simple extends Model 
{
    public static function AddUser($name,$username,$password)
    {
        $auth = new Auth();
        // $salt = Hash::salt(20);
        $user = Model:: getDb()->insertInTo('people',array(
            
            'name'=>$username,
            'username'=>$username,
        'password'=>md5($password)
        // 'salt'=>md5(),
        // 'name'=>$name,
        // 'joined'=>'today',
        // 'group'=>1
          ));
      
    //   $auth->create('users',array(
    //     'username'=>$username,
    //     'password'=>$salt::make($password),
    //     'salt'=>$salt,
    //     'name'=>$name,
    //     'joined'=>'today',
    //     'group'=>1
    //   ));
    
    }
}