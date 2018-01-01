<?php
namespace Core\Parts;


use Core\Config;
use Core\Parts\User;
use PDO;
abstract class Model {
  public
          $_errors=false,
          $_count=0,
          $_results,
          $_query;
   static $db = null;
  public static function getDb()
  {

    if($db==null)
    {
      try{
        $db = new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/database'),Config::get('mysql/username'),Config::get('mysql/password'));
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $db;
      }catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    }

  }

}
