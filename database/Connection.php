<?php 


class Connection 
{
    public static function start() 
    {
        try {
            return new PDO('mysql:host=localhost;dbname=todos', 'root', 'dendritas');
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }


}