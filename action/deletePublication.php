<?php

require('database.php');

$idPublication = $_GET['id'];

$publication = $bdd -> prepare('DELETE FROM activity WHERE ID = ?');
$deleteFromId = $publication -> execute(array($idPublication)); 
header('location: ../gestion-publication.php');