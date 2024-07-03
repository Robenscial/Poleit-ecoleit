<?php
require('database.php');

if(isset($_POST['submit'])){
    if(
        !empty($_POST['name'])&&
        !empty($_POST['email'])&&
        !empty($_POST['password'])
        )
    {
            $userPseudo = htmlspecialchars($_POST['name']);
            $userEmail = htmlspecialchars($_POST['email']);
            $userPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $gender = $_POST['gender'];
            $role = "utilisateur";

            $checkUserExist = $bdd->prepare('SELECT NAME, EMAIL FROM users WHERE NAME=? OR EMAIL=?');
            $checkUserExist->execute(array($userPseudo, $userEmail));

            if($checkUserExist->rowCount() == 0){

                if($gender == "F"){
                    $path = "assets/pp2.png";
                }else{
                    $path = "assets/pp1.png";
                }

                $insertUser = $bdd->prepare('INSERT INTO users(NAME, EMAIL, PASSWORD, ROLE, PROFILE) VALUES (?, ?, ?, ?, ?)');
                $insertUser->execute(array($userPseudo, $userEmail, $userPassword, $role, $path));
                header('location: ../connexion.php');

            }else{
                $errorMSG = "l'Utilisateur existe deja";
            }

    }else{
        $errorMSG = "Veillez remplir tous les champs";
    }

}else{


if(isset($_POST['send'])) {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['password']))
    {
        $userPseudo = htmlspecialchars($_POST['name']);
        $userPassword = htmlspecialchars($_POST['password']);

        $checkUserExist = $bdd->prepare('SELECT * FROM users WHERE NAME=?');
        $checkUserExist->execute(array($userPseudo));

        if ($checkUserExist->rowCount() > 0) {

            $userData = $checkUserExist->fetch();
            if (password_verify($userPassword, $userData['PASSWORD'])) {

                session_start();

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userData['ID'];
                $_SESSION['name'] = $userData['NAME'];
                $_SESSION['email'] = $userData['EMAIL'];
                $_SESSION['role'] = $userData['ROLE'];
                $_SESSION['profile'] = $userData['PROFILE'];


                if ($_SESSION['role'] == "utilisateur") {

                    header('location: /profil-utilisateur.php');
                } else {
                    header('location: /profil-administrateur.php');
                }

            } else {
                $errorMSG = "Nom d'utilisateur ou mot de passe incorrect";
            }

        } else {

            $errorMSG = "Nom d'utilisateur ou mot de passe incorrect";
        }

    } else {
        $errorMSG = "Veillez remplir tous les champs";
    }
}
}


