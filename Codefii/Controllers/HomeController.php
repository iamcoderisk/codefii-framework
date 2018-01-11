<?php
namespace Codefii\Controllers;
use Core\View;
use Core\Parts\Validation;
use Core\Parts\Request;
use Codefii\Models\Simple;
use Core\Helpers\Redirect;
use Core\Authentication\Auth;
class HomeController  {
  public function index(){
    
    // if(Request::exists()){
    //   $validation = new Validation();
    //   $validation->validate($_POST,array(
    //       'First-Name'=>array(
    //         'required'=>true
    //       ),
    //       'Last-Name'=>array(
    //         'required'=>true
    //       )
    //   ));
    //   if($validation->isNotFailed()){
    //       $send = Simple::AddUser(Request::get('First-Name'),Request::get('Last-Name')); 
    //       if($send){
    //         Redirect::to('/docs');
    //       }
    //   }else{
    //     $error = $validation->errors();
        
    //   }
    
    // }
    $user = new Auth();
    $user->create('simple',array(
        'firstname'=>'ekemini',
         'lastname'=>'darlington'
    ));
    View::render('Home/index.php');
  }
  

  //documentation
  public function docs()
  {
    echo"hello form docs";
  }
  
}
