<?php
namespace Core\Parts;
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
