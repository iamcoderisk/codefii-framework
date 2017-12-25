<?php

namespace App\Models;
/**
 * Post model
 *
 * PHP version 5.4
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
            // $db = static::getDb();
            // $stmt = $db->query('SELECT * FROM users');
            // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $results = static::getDb()->query("SELECT * FROM users");
            return $results;

    }
}
