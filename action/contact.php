<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['send'])) {
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = ' aoumweor@gmail.com ';                     //SMTP username
        $mail->Password = 'sixojvayegphxcgk';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->setFrom('aoumweor@gmail.com', 'Site Expert');
        $mail->addAddress("$emailExpert");

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contacter';
        $mail->Body = "Nom:<b>$nom</b> <br> Mail:<b>$email</b> <br> $message ";
        $mail->AltBody = "Vous avec ete contacte par $nom, son email: $email et voici son message $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
