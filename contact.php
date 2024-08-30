<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'jabezmotari5@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";
    
    if (mail($to, $subject, $email_message, $headers)) {
        echo "<p>Thank you for your message. I will get back to you soon.</p>";
    } else {
        echo "<p>There was an error sending your message. Please try again later.</p>";
    }
}
?>
