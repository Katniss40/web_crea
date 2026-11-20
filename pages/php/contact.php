<?php

// Configuration
$recipient = "web-cre4@alwaysdata.net"; // Adresse de réception
$from      = "web-cre4@alwaysdata.net";  // Doit appartenir au domaine de l'hébergement pour éviter les rejets

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Nettoyage
    $name      = trim($_POST['name'] ?? '');
    $surname   = trim($_POST['surname'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $subject   = trim($_POST['subject'] ?? '');
    $message   = trim($_POST['message'] ?? '');

    // Validation
    if ($name === '' || $surname === '' || $email === '' || $telephone === '' || $subject === '' || $message === '') {
        header('Location: /formulaire?error=missing');
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: /formulaire?error=email');
        exit();
    }

    // Corps du mail
    $fullMessage = "Nouveau message depuis le formulaire Web-Crea\n\n" .
        "Nom: {$name}\n" .
        "Prénom: {$surname}\n" .
        "Email: {$email}\n" .
        "Téléphone: {$telephone}\n" .
        "Sujet: {$subject}\n\n" .
        "Message:\n{$message}\n\n" .
        "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'n/a');

    // Entêtes: From = domaine du site, Reply-To = expéditeur
    $headers  = "From: Web-Crea <{$from}>\r\n";
    $headers .= "Reply-To: {$name} <{$email}>\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $sent = mail($recipient, $subject, $fullMessage, $headers);

    if ($sent) {
        header('Location: /formulaire?success=1');
    } else {
        header('Location: /formulaire?error=send');
    }
    exit();
}

// Si accès direct
header('Location: /formulaire');
exit();

?>