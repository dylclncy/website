<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $message = htmlspecialchars($_POST['subject']);

    $to = "dylclncy@yahoo.com";
    $subject = "Contact Form: $lastName";
    $body = "Name: $firstName\nSubject: $lastName\n\nMessage:\n$message";

    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed...";
    }
}
?>
