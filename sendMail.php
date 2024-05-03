<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['mail'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Paramètres de configuration SMTP
    $mail = new PHPMailer(true);
    try {
        // Configuration du serveur SMTP
        $mail->SMTPDebug = 0;                      // Activer la sortie de débogage verbose
        $mail->isSMTP();                                            // Envoi via SMTP
        $mail->Host = 'smtp.gmail.com';                    // Définir le serveur SMTP
        $mail->SMTPAuth   = true;                                   // Activer l'authentification SMTP
        $mail->Username   = 'joseph023mitch@gmail.com';                     // Nom d'utilisateur SMTP
        $mail->Password   = 'icmjcczfglvyjkwc';                           // Mot de passe SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // Activer le cryptage TLS
        $mail->Port       = 587;                                    // Port TCP pour se connecter

        // Destinataire
        $mail->setFrom("mohameddiouf081@gmail.com", $nom);
        $mail->addAddress('joseph023mitch@gmail.com');             // Ajouter un destinataire

        // Contenu de l'email
        $mail->isHTML(false);                                  // Format texte brut
        $mail->Subject = $sujet;
        $mail->Body    = "Nom: $nom\nMessage: $message";

        // Envoyer l'email
        $mail->send();
        echo 'Votre message a été envoyé avec succès';
        
    } catch (Exception $e) {
        echo "Une erreur s'est produite lors de l'envoi du message : {$mail->ErrorInfo}";
    }
} else {
    echo "Le formulaire n'a pas été soumis correctement";
}
?>
