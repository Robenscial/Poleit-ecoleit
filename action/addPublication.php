<?php

require('database.php');

if(isset($_POST['publish'])){
    if(
        !empty($_POST['title'])&&
        !empty($_POST['content']))
    {
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);

        $image = $_FILES['image'];
        $filename = $image["name"];
        $type = $image['type'];
        $size = $image['size'];
        $tmp_name = $image['tmp_name'];
        if(!empty($filename)){
            $path = "images/" .uniqid() . $filename;
            move_uploaded_file($tmp_name, $path);
        }else{
            $errorMSG = "Please select a file to upload";
        }

        $publication = $bdd->prepare('INSERT INTO activity(TITLE, TEXT, PICTURE, DATE) VALUES (?, ?, ?, ?)');
        $publication->execute(array($title, $content, $path, date(date("Y-m-d H:i:s"))));
        header('location: ../gestion-publication.php');
    }

}