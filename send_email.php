<?php
use PHPMailer\PHPMailer.php;
use PHPMailer\Exception.php;
use PHPMailer\SMTP.php;

require 'vendor/autoload.php';
$mail = new PHPMailer; //From email address and name 
$mail->From = "pedromoreiralopes1@gmail.com"; 
$mail->FromName = "Full Name"; //To address and name 
$mail->addAddress("pedromoreiralopes1@example.com", "Recepient Name");//Recipient name is optional
$mail->addAddress("pedromoreiralopes1@example.com"); //Address to which recipient will reply 
$mail->addReplyTo("pedromoreiralopes1@yourdomain.com", "Reply"); //CC and BCC 
$mail->addCC("cc@example.com"); 
$mail->addBCC("bcc@example.com"); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = "Subject Text"; 
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo "Message has been sent successfully"; 
}
if(!$mail->send()) 
{ 
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else 
{ 
echo "Message has been sent successfully"; 
}
?>