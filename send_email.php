<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $recipient = 'slinhart@leadership-solutions.at';
    $subject = 'Neue Nachricht über das Kontaktformular';
    $email_content = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message\n";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($recipient, $subject, $email_content, $headers)) {
        echo 'Ihre Nachricht wurde erfolgreich gesendet!';
    } else {
        echo 'Es gab ein Problem beim Senden der Nachricht. Bitte versuchen Sie es später noch einmal.';
    }
}
