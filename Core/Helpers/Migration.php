<?php


use Core\Helpers;
use Core\Parts\Models;
class Migration {
    public function createTable($tableName,$fields=array()){
              $keys = array_keys($fields);
              $values = null;
              $x =1;//this is a counter
              foreach($fields as $field)
              {
                  $values .='?';
                if($x < count($fields))
                {
                  $values .=',';
                }
                $x++;
            }
            $sql ="INSERT CREATE TABLE IF NOT EXISTS {$tableName} (`".implode('`,`',$keys)."`) VALUES({$values})";
            echo "  ";
              if(!$this->query($sql,$fields)->error())
              {
                return true;
              }
            return false;
    }

}