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

<?php 
declare(strict_types=1);

use PHPMailer\PHPMailer\PHPMailer;

require_once('vendor/autoload.php');
require_once("phpMailer/Exception.php");
require_once("phpMailer/PHPMailer.php");
require_once("phpMailer/SMTP.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);
$alert = '';

if(!empty($_POST["email"])){
    $email = $_POST["email"];

    try{
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_FINAB_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_FINAB'];
        $mail->Password = $_ENV['MAIL_FINAB_PASSWORD'];
        $mail->SMTPSecure = "ssl";
        $mail->Port = "465";

        $mail->setFrom($_ENV['MAIL_FINAB']);
        $mail->addAddress($_ENV['MAIL_FINAB']);

        $mail->isHTML(true);
        $mail->Subject = "Abonnement au newsletter Finab";
        $mail->CharSet = "UTF-8";
        $mail->Body = '
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="utf-8">
                </head>
                <body>
                    <div>
                        Nouveau abonnement: <strong>Nom/Prénoms/Institution</strong>: '.$email.' <br>
                    </div>
                </body>
            </html>';
        $mail->send();
        
        echo "Soumission effectué avec succès.";
        header('Location: index.php');
        exit();
    } catch (Exception $err){
        echo "Erreur lors de la soumission . (<a href='/'>CLIQUER ICI POUR RÉESSAYER)";
    }
}

?>