
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

// Configuración del servidor SMTP
$mail->isSMTP();
$mail->Host       = 'smtp.mailgun.org';
$mail->SMTPAuth   = true;
$mail->Username   = $_ENV['EMAIL_HOST_USER'];
$mail->Password   = $_ENV['EMAIL_HOST_PASSWORD'];
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;

?>