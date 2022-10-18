<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

try{
$mail = new PHPMailer(true);

    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;    
    $mail->Username   = 'saiyedsab000@gmail.com';                    
    $mail->Password   = 'xxxxx';                              
    $mail->SMTPSecure = 'tls';            
    $mail->Port       = 587;                                    

    
    $mail->setFrom('saiyedsab000@gmail.com', 'Noorhasan');
    $mail->addAddress('saiyednoorhasan2002@gmail.com','rtCamp');                  
    $mail->addReplyTo('no-reply@gmail.com', 'No-reply');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

   
       
    $mail->addAttachment('space_adventure.png');    

    
    $mail->isHTML(true);    
    $mail->CharSet='UTF-8';	
    $mail->Subject = 'Rtcamp project';
    $mail->Body    = 'This is the HTML message body <b>Welcome!</b>';
	

try{

    $mail->send();
    echo 'Message has been sent';
	sleep(300);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	
	$mail->getSMTPInstance()->reset();
}
$mail->clearAddresses();
$mail->clearAttachments();
}