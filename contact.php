<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "anais.khetib@gmail.com"; 
    $headers = "From: " . $email;
    $body = "Nom : $name\nEmail : $email\nSujet : $subject\n\nMessage :\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci, votre message a bien été envoyé.";
    } else {
        echo "Désolé, une erreur s'est produite. Veuillez réessayer.";
    }
}
?>