<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Replace these placeholders with your actual email configuration
    $to = "arsurgical2018@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank-you page or display a success message
    header("Location: thank-you.html");
    exit;
}
?>
