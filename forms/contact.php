<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'ali@alkhiami.de';
    $subject = 'New message from your website';
    $body = "From: $name\nE-Mail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Your message has been sent successfully!';
    } else {
        echo 'There was a problem sending your message.';
    }
}
?>
