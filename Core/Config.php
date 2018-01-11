<?php
/**
 *Author: Prince E. Darlington
 */
namespace Core;
session_start();
$GLOBALS['config'] =  array(
  'mysql'=>array(
    'host'=>'localhost',
    'username'=>'root',
    'password'=>'prince',
    'database'=>'codefi',
    'encoding' => 'utf8',
    'timezone' => 'UTC',
    'cacheMetadata' => true,
    'log' => false,

  ),
  'remember'=>array(
    'cookie_name'=>'hash',
    'cookie_expiry'=>604800
  ),
  'session'=>array(
    'session_name'=>'user',
    'token_name'=>'token'
  )
);

class Config

{
public static function get($path=null)
  {
    if($path)
    {
      $config = $GLOBALS['config'];
      $path = explode('/',$path);
      foreach ($path as $bit)
      {
        if(isset($config[$bit]))
        {
          $config = $config[$bit];
        }
      }
      return $config;
    }
    return false;
  }
}
