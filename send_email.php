<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'omo88moses@gmail.com';
        $mail->Password = 'eoia eqob myjq adil'; // Use environment variables instead
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('omo88moses@gmail.com', 'Ogiki Moses'); // Add a recipient

        // Content
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo json_encode(["status" => "success", "message" => "Your message has been sent successfully."]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
}
