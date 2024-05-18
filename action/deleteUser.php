<?php
require('database.php');

$idUser = $_GET['id'];

$user = $bdd -> prepare('DELETE FROM users WHERE ID = ?');
$deleteFromId = $user -> execute(array($idUser));
header('location: ../gestion-utilisateur.php');
