<?php

require('database.php');

$getPublication = $bdd ->query('SELECT * FROM activity ORDER BY ID DESC');


