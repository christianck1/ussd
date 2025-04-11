<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Get form data
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // For Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ckelchristian@gmail.com';    // Your Gmail
    $mail->Password   = 'akjaywecwpmpwesk';       // Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Sender & recipient
    $mail->setFrom('ckelchristian@gmail.com', 'Website Contact Form');
    $mail->addAddress('cksoftwareindustry@gmail.com'); // Where the message goes

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Message from Contact Form';
    $mail->Body    = "
        <h3>Name: $name</h3>
        <h4>Email: $email</h4>
        <p>Message:<br>$message</p>
    ";

    $mail->send();
    echo "Message has been sent!";
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
