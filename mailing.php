<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';	

 $to = 'info@katamarwamboira.org';
    $subject = 'Sample Subject';
    $message = 'Hi. This is a sample message.';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers = 'From: info@etechgarage.com' . "\r\n" .
        'Reply-To: no-reply@etechgarage.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
	echo '<script type="application/javascript">';
				echo'window.location.href="index.html";';
				echo '</script>';
?>