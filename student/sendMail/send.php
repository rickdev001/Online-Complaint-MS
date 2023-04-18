<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';					  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'neilohene@gmail.com';              
    $mail->Password = 'snqzhxdryxnojwct';                        
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 465; 
    $mail->setFrom('neilohene@gmail.com', 'Neil');
    $mail->addAddress('iamneil88@aol.com', 'Neil');
    $mail->isHTML(true);                                  
    $mail->Subject = 'Congratulations! <br/> You are Registered Successfully .....';
    $mail->Body    = '<h1>Hello Participents..!<br/>You are registered Please contact </h1>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo '<h1>Message has been sent</h1>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
