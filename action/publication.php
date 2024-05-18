<?php

require("database.php");
$idPublication = $_GET['id'];
if (isset($_SESSION["auth"])) {

    $getPublication = $bdd ->prepare('SELECT * FROM activity WHERE ID = ?');
    $getPublication->execute(array($idPublication));

}else{
    header("location:/connexion.php");
}