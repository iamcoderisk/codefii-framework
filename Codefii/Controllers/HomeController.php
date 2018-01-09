<?php
namespace Codefii\Controllers;
use Core\View;
class HomeController  {
  public function index(){
    View::render('Home/index.php');
  }
}
