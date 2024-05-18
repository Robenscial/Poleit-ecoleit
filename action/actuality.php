<?php
require('database.php');

$getPublication = $bdd ->query('SELECT * FROM activity ORDER BY ID DESC');
$getActuality = $bdd ->query('SELECT * FROM activity ORDER BY ID DESC LIMIT 6');