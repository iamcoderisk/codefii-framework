<?php
namespace Codefii\Controllers;
use Core\View;
use Core\Parts\Validation;
use Core\Parts\Request;
use Codefii\Models\Simple;
use Core\Helpers\Redirect;
use Core\Parts\Token;
class HomeController  {
  public function index(){

    if(Request::exists()){
      if(Token::check(Request::get('token'))){
        $validation = new Validation();
        $validation->validate($_POST,array(
            'name'=>array(
              'required'=>true
            ),
            'username'=>array(
              'required'=>true,
              'min'=>5,
              'max'=>30
            ),
            'password'=>array(
              'required'=>true,
              'min'=>6
            )
        ));
        if($validation->isPassed()){
            try{
            Simple::AddUser(Request::get('name'),Request::get('username'),Request::get('password'));       
            throw new RuntimeException();
            }catch(LogicException $e)
            {
              die($e->getMessage());
            }finally{
              Redirect::to('index');
            }

        }else{
          $error = $validation->errors();
          
        }
      
      }
    }
    
    View::render('Home/index.php',['error'=>$error,
    'token'=>Token::generate(),'fullname'=>Request::get('Full-Name'),
    'username'=>Request::get('username')
    ]);
  }
  

  //documentation
  public function docs()
  {
    echo"hello form docs";
  }
  
}
