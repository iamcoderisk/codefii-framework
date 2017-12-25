<?php
namespace Core;

/**
 * Home controller
 *
 * PHP version 7.1
 */
class View {
  public static function render($view,$args=[])
  {
    extract($args, EXTR_SKIP);
    $file = "../App/Views/$view";
    //check if file is redable

    if(is_readable($file))
    {
      require $file;
    }
    else{
      echo "$file not found";
    }
  }

  public static function renderTemplate($template,$args=[])
  {
    static $twig = null;
    if($twig===null)
    {
      $loader = new \Twig_Loader_Filesystem("../App/Views");
      $twig = new \Twig_Environment($loader);
    }
    echo $twig->render($template,$args);
  }
}
