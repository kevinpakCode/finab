<?php
namespace MonPackage;

class Mailer {
    public function sendMail($to, $subject, $message) {
        // Utiliser les paramètres SMTP du fichier de configuration
        $smtpConfigPath = __DIR__ . '/../config/smtp_config.php';
        if (file_exists($smtpConfigPath)) {
            include $smtpConfigPath;
        } else {
            throw new \Exception("Fichier de configuration SMTP introuvable.");
        }
        
        // Envoi du courriel
        if (mail($to, $subject, $message)) {
            return true; // Succès de l'envoi du courriel
        } else {
            return false; // Échec de l'envoi du courriel
        }
    }
}
?>
