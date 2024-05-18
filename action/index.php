<?php
require ("database.php");

$publication = $bdd->query("SELECT * FROM activity ORDER BY ID DESC LIMIT 4");


