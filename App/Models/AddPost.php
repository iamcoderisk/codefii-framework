<?php

namespace App\Models;
/**
 * Post model
 *
 * PHP version 7.1
 */
 use PDO;
class AddPost extends \Core\Parts\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public  function addInfo($title,$content)
    {


            // $stmt = $db->query('SELECT * FROM users');
            // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // $results = static::getDb()->insert('posts',array(
            //     'title'=>$title,
            //     'content'=>$content,
            //     'created_at'=>time()
            //
            // ));
            // return $results;
            $pdo = new PDO("mysql:host=localhost;dbname=codefii",'root','prince');
            $sql = $pdo->prepare("INSERT INTO posts(title,content,created_at) VALUES(?,?,?)");
            // $sql->bindParam(1, $title);
            // $sql->bindParam(2, $content);
            // $sql->bindParam(3, time());
            // $sql->execute();
            return $sql;
    }
}
