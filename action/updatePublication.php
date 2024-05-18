<?php

require('database.php');

if(isset($_POST['update'])){
    if(
        !empty($_POST['title'])&&
        !empty($_POST['content']))
    {
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $picture = htmlspecialchars($_POST['picture']);
        $id = $_POST['id'];

        $image = $_FILES['image'];
        $filename = $image["name"];
        $type = $image['type'];
        $size = $image['size'];
        $tmp_name = $image['tmp_name'];
        if(!empty($filename)){
            $path = "images/" .uniqid() . $filename;
            move_uploaded_file($tmp_name, $path);
        }else{
            $path = $picture;
        }

        $publication = $bdd->prepare('UPDATE activity SET TITLE = ?, TEXT = ?, PICTURE = ? WHERE id = ?');
        $publication->execute(array($title, $content, $path, $id ));
        header('location: ../gestion-publication.php');
    }

}



