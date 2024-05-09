<?php

function dd($value) 
{
    return die(var_dump($value));
}

function dbConnect()
{
    try {
        return new PDO('mysql:host=localhost;dbname=todos', 'root', 'dendritas');
    } catch (PDOException $error) {
        die($error->getMessage());
    }
}

function getAllTasks($pdo)
{
    $query = $pdo->prepare('select * from tasks');

    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}