<?php 

namespace Core\Database;
use PDO;
use PDOException;

class Connection 
{
    public static function start($config) 
    {
        try {
            return new PDO("{$config['type']}:host={$config['host']};dbname={$config['database']}", $config['user'], $config['password']);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}