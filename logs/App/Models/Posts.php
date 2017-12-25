<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class Post
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $host = 'localhost';
        $dbname = 'codefi';
        $username = 'root';
        $password = 'prince';

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                          $username, $password);

            $stmt = $db->query('SELECT * FROM users');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
