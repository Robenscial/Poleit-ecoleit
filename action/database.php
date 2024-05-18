<?php
try{
    $dbName = getenv("MARIADB_DATABASE");
    $dbUser = getenv("MARIADB_USER");
    $dbPassword = getenv("MARIADB_PASSWORD");

    $bdd = new PDO("mysql:host=database;dbname={$dbName};charset=utf8;", "{$dbUser}", "{$dbPassword}");
}
catch(Exception $e){
    die('Erreur de connexion : ' . $e->getMessage());
}
