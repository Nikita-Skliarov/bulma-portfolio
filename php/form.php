<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/includes/PHPMailer-6.9.1/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/includes/PHPMailer-6.9.1/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/includes/PHPMailer-6.9.1/src/SMTP.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $company = htmlspecialchars($_POST['company']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer();

    try {

        // Server settings (use your own settings)
        $mail->isSMTP();
        $mail->Host = '';
        $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '';

        // Recipients
        $mail->setFrom('contact@ns-my-portfolio.nl', 'Portfolio');
        $mail->addAddress('nikitaskliarov2004@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Nieuwe bericht van ' . $company;
        $mail->Body = "
        Beste Nikita,
        <br>
        <br>
        Er is een nieuw bericht van <strong>$name</strong> van <strong>$company</strong>.
        <br>
        <br>
        <strong>Email:</strong> $email
        <br>
        <br>
        <strong>Bericht:</strong>
        <br>
        $message";
        // Send email
        $mail->send();
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?success=true');
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}