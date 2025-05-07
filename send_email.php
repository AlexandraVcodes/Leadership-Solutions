<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $recipient = 'slinhart@leadership-solutions.at';
    $email_subject = 'Neue Nachricht über das Kontaktformular: ' . $subject;
    $email_content = "Titel: $title\nName: $name\nE-Mail: $email\nTelefonnummer: $phone\n\nBetreff: $subject\n\nNachricht:\n$message\n";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($recipient, $email_subject, $email_content, $headers)) {
        echo 'Ihre Nachricht wurde erfolgreich gesendet!';
    } else {
        echo 'Es gab ein Problem beim Senden der Nachricht. Bitte versuchen Sie es später noch einmal.';
    }
}
?>
