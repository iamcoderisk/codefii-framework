<?php
  namespace Core\Helpers;
  class Add
  {
    public static function exists($type='post')
    {
      switch($type){
        case 'post':
        return (!empty($_POST)) ? true :false;
        break;
        case 'get':
        return (!empty($_GET)) ? true :false;
        break;
        default:
        return false;
        break;

      }

    }
    public static function get($item)
    {
      if(isset($_POST[$item]))
      {
        return $_POST[$item];
      }else{
        return $_GET[$item];
      }
      return '';//return an empty string
    }

}
