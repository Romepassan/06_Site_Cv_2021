<?php

$user = 'root';
$pass = 'root';

try {
    $db = new PDO ('mysql:host=localhost;dbname=stock, $user, $pass');
    foreach ($db->query('SELECT * FROM produits') as $row)
    {
        print_r($row);
    }
} 
catch (PDOxception$e) 
{
    print "erreur :" . $e->getMessage() . "br/";
    die;
}