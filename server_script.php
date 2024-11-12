<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Start the session
session_start();

// Load .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $phone = htmlspecialchars($_POST['phone']);

    // Check for empty fields
    $empty_fields = [];
    if (empty($name)) {
        $empty_fields[] = "Name";
    }
    if (empty($email)) {
        $empty_fields[] = "Email";
    }
    if (empty($phone)) {
        $empty_fields[] = "Phone Number";
    }
    if (empty($subject)) {
        $empty_fields[] = "Subject";
    }
    if (empty($message)) {
        $empty_fields[] = "Message";
    }

    if (!empty($empty_fields)) {
        // Display error message with missing fields
        $error_message = "Please fill in the following fields: " . implode(", ", $empty_fields);
        echo "<script>alert('$error_message');</script>";
        exit();
    }

    // Email configuration
    $to = "ritewu2014@gmail.com";
    $from = "noreply@softkit.io";
    $smtp_host = "mail.softkit.io";
    $smtp_username = "noreply@softkit.io";
    $smtp_password = $_ENV['SMTP_PASSWORD']; // Get SMTP password from environment variables

    // Create an instance of PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_username;
        $mail->Password = $smtp_password;
        $mail->SMTPSecure = "tls"; // Enable TLS encryption (check your provider)
        $mail->Port = 587; // Generally TLS uses port 587

        // Recipients
        $mail->setFrom($from, 'Your Name');
        $mail->addAddress($to, 'Recipient Name');

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Subject: $subject<br>Message:<br>$message"; // Include phone number
        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage:\n$message"; // Optional, for non-HTML email clients

        $mail->send();

        // Set a session variable to trigger the Toastr notification
        $_SESSION['toastr'] = "Your contact request has been sent successfully!";

        // Redirect to the success page
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo "<script>alert('There was an error sending your message. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
} else {
    // If not a POST request, redirect to the form page
    header("Location: index.php");
    exit();
}
