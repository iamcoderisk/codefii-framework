<?php
/*
* author: Prince Darlington
*website:http://codefii.com
*license: open-source
*/
namespace Core\Parts;
use \Core\Parts\Model;
use \Core\Config;
use \Core\Parts\Session;
use \Core\Parts\Hash;
use \Core\Parts\Add;


class User extends \Core\Parts\Model
{

          public function __construct()
          {
            $this->_pdo = static::getDb();
              return $this->_pdo;
          }
  public function getOne($table,$field,$username)
  {
    $results = static::getDb()->prepare("SELECT * FROM {$table} WHERE {$field} =?");
        $results->execute(array($username));
        $display = $results->fetch();
        return $display;

  }


}
