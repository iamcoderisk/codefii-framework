<?php
namespace Core\Authentication;
use Core\Parts\Session;
use Core\Config;
use Core\Parts\Model;
use Core\Parts\Hash;
class Auth
{
  private $_db,
          $_data,
          $_sessionName,
          $_cookieName,
          $_isLoggedIn;
  public function __construct($user = null)
  {
    $this->_db = Model::getDb();
    if($this->_db){
      echo"true";
    }
    $this->_sessionName = Config::get('session/session_name');
    $this->_cookieName = Config::get('remember/cookie_name');
    //check if user is logged in or not
    if(!$user)
    {
        if(Session::exists($this->_sessionName))
        {
            $user = Session::get($this->_sessionName);
            if($this->find($user))
            {
             $this->_isLoggedIn = true;
            }
            else
            {
                    //process logout
            }

        }
        else {
          $this->find($user);
        }
    }
  }
  //create a new user
  public function create($table,$fields = array())
  {
    if(!$this->_db->insertInTo($table,$fields))
    {
      throw new Exception('there was a problem creating an account');
    }
  }
  //a method to find user by it's id
  public function find($user)
  {
    if($user)
    {
      $field = (is_numeric($user)) ? 'id':'username';
      $data = $this->_db->get('users',array($field,'=',$user));
      //count the record if found any
      if($data->count())
      {
        $this->_data = $data->first();
        return true;
      }
    }
    return false;
  }
  public function login($username=null,$password=null,$remember=false)
  {
    $user = $this->find($username);
    if($user)
    {
        if($this->data()->password === Hash::make($password,$this->data()->salt))
        {
          Session::put($this->_sessionName,$this->data()->id);
          //check and see if remember is true or false: don't modify this again
            if($remember)
            {
              $hash = Hash::unique();

              $hashCheck = $this->_db->get('users_session',array('user_id','=',$this->data()->id));

              if(!$hashCheck->count())
              {
               $this->_db->insertInTo('users_session',array(
                 'user_id'=>$this->data()->id,
                 'hash'=>$hash
             ));
              }else{
                  $hash = $hashCheck->first()->hash;
              }
              Config::put($this->_cookieName,$hash,Config::get('remember/cookie_expiry'));
            }
          return true;

        }
    }

    return false;
  }
    public function update($table,$fields=array(),$id=null)
    {
      if(!$id && $this->isLoggedIn())
      {
        $id = $this->data()->id;
      }
      if(!$this->_db->update($table,$id,$fields))
      {
        throw new Exception('there was a problem updating');
      }
    }
      public function data()
      {
        return $this->_data;
      }

      public function isLoggedIn()
      {
        return $this->_isLoggedIn;
      }
      public function logout()
      {
        Session::delete($this->_sessionName);
      }

}
