<?php

function connection() 
{
    $pdo = new  PDO('mysql:host=localhost;dbname=teste_php', 'root', 'lucas');
    return $pdo;
}

function getData($table, $name, $age)
{
    $connection = connection();
    $query = $connection->query("select * from {$table}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData('comments','$'));