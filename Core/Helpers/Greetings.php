<?php
namespace Core\Helpers;
class Greetings
{
  public function __construct()
  {
    return self;
  }
  public static function welcome($params)
  {
    return "welcome, {$params}";
  }
}
