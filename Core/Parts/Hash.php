<?php

namespace Core\Parts;
class Hash
{
  public static function make($string, $salt='')
  {
    return hash('sha256',$string.$salt);
  }
  public static function salt($length)//generate a salt of a particular length
  {
    return mcrypt_create_iv($length);
  }
  public static function unique()
  {
    // return self::make(uniqid());
    return self::make(base64_encode(openssl_random_pseudo_bytes(50)));

  }
}
