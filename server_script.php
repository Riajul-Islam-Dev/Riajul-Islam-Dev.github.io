<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required";
        exit();
    }

    // Email configuration
    $to = "riajul.islam.dev@gmail.com";
    $subject = "New Contact Form Submission: $subject";
    $headers = "From: $email";

    // Compose and send email
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
    mail($to, $subject, $mailBody, $headers);

    // Redirect after successful submission (you can customize the URL)
    header("Location: thank_you_page.html");
    exit();
} else {
    // If not a POST request, redirect to the form page
    header("Location: your_form_page.html");
    exit();
}
