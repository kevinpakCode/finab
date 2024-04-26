<?php
    require_once './mon-package/src/Mailer.php';

    use MonPackage\Mailer;
    try {
        if ( !empty($_POST["email"]) ) {
            $email = $_POST["email"];
            
            $to = $email; 
            $subject = 'Abonnement à la newsletter';
            $message_body = "Email: $email\n";
            $message_body .= "Vous venez de vous abonner à notre newsletter. Vous recevrez désormais les actualités du site";
            $mailer = new Mailer();
            $mail= $mailer->sendMail($to, $subject, $message_body);
            if ($mail) {
                // dd($to);
                echo "Votre message a été envoyé avec succès.";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit(); 
            } else {
                echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
            }
        }
    }catch (\Exception $e) {
        $errorMessage = $e->getMessage();
        var_dump($errorMessage);
    }

?>