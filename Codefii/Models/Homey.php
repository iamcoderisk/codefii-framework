<?php

namespace Codefii\Models;
/**
 * Post model
 *
 * PHP version 7.1
 */
 use Codefii\Models\Post;
 use Core\Parts\Add;
 use Core\Parts\Validate;
 use Core\Parts\Redirect;
 use Core\Parts\User;
 use Core\Parts\Hash;
 use Core\Parts\Model;



class Homey extends Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
            $users= Model::getDb()->query("SELECT * FROM users");

            return $users;

    }
    // public static function saveInfo($val,$val2){
    //     $db = static::getDb();
    //     $stmt = $db->prepare("INSERT INTO play(title,content) VALUES(?,?)");
    //     return $stmt->execute(array($val,$val2));
    // }
    // public static function updateInfo($val,$val2)
    // {
    //     $db = static::getDb();
    //     $stmt = $db->prepare("UPDATE play SET title =? WHERE id =?");
    //     return $stmt->execute(array($val,$val2));
    // }
    // public static function removeNews($val)
    // {
    //     $db = static::getDb();
    //     $stmt = $db->prepare("DELETE FROM play WHERE id ='$val'");
    //     return $stmt->execute();
    // }
    public static function preDb($name,$number)
    {
    $user = Model::getDb()->insert('users',array(
      'username'=>$name,
      'password'=>$number,
      'salt'=>'salt',
      'name'=>'prince darlington',
      'joined'=>'today',
      'group'=>'22'
    ));

    }


}
