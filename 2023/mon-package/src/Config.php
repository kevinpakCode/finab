<?php
namespace MonPackage;

class Config {
    public static function getSmtpConfig() {
        return include '../config/smtp_config.php';
    }
}
?>
