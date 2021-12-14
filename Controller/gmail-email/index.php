<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Username = 'ssefy150@gmail.com'; // YOUR gmail email
    $mail->Password = '*****'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('ssefy150@gmail.com', 'Vitalogic');
    $mail->addAddress($_GET['email'], $_GET['username']);
    //$mail->addReplyTo('example@gmail.com', 'Sender Name'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Your account has been created ";
    $mail->Body = 'Welcome to Vitalogic "'.$_GET['username'].'"';
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
    header("refresh: 0; url = http://localhost/vitalogic/view/sign-in.php");
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>
