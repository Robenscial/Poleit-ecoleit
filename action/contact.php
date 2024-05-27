<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

if (isset($_POST['submit'])) {
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'robenfaha92@gmail.com';
        $mail->Password = 'duimpjavbqlnpfui';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('robenfaha92@gmail.com', 'poleit');
        $mail->addAddress("Marianetkr@gmail.com");

        $mail->isHTML(true);                                  
        $mail->Subject = 'Contacter';
        $mail->Body = "Nom:<b>$nom</b> <br> Mail:<b>$email</b> <br> $message ";
        $mail->AltBody = "Vous avez ete contacte par $nom, son email: $email et voici son message $message";

        $mail->send();
        $message = 'Le message a ete envoye avec success';
    } catch (Exception $e) {
        $message = "Le message ne peut pas etre envoye. Mailer Error: {$mail->ErrorInfo}";
    }
}
