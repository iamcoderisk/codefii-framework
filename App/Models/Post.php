<?php

namespace App\Models;
/**
 * Post model
 *
 * PHP version 7.1
 */
class Post extends \Core\Parts\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
            $results = static::getDb()->query("SELECT * FROM play");
            return $results;

    }
    public static function saveInfo($val,$val2){
        $db = static::getDb();
        $stmt = $db->prepare("INSERT INTO play(title,content) VALUES(?,?)");
        return $stmt->execute(array($val,$val2));
    }
    public static function updateInfo($val,$val2)
    {
        $db = static::getDb();
        $stmt = $db->prepare("UPDATE play SET title =? WHERE id =?");
        return $stmt->execute(array($val,$val2));
    }
    public static function removeNews($val)
    {
        $db = static::getDb();
        $stmt = $db->prepare("DELETE FROM play WHERE id ='$val'");
        return $stmt->execute();
    }
}

?>
<?php


?>
