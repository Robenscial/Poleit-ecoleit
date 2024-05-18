<?php
require('database.php');

$getUsers = $bdd -> query('SELECT * FROM users ORDER BY ID DESC');
