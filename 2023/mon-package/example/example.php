<?php
require_once '../src/Mailer.php';

use MonPackage\Mailer;

$mailer = new Mailer();
$mailer->sendMail('bakobertrand10@gmail.com', 'Sujet du courriel', 'Contenu du courriel');
?>
