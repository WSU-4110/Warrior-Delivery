<?php
print_r($_POST);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
   $sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`, `status`) VALUES (NULL,'$nameofuser', '$_POST[test1]', '3')";
  $result = mysqli_query($db,$sql);
   
    $sql = "UPDATE testvalues SET balance = '$_POST[test2]' WHERE user_name='$nameofuser'";
  $result = mysqli_query($db,$sql);
   
  $mail = new PHPMailer(true);

/* try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'afnanatif@hotmail.com';                     // SMTP username
    $mail->Password   = '2011isthebest2013';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('wsudiningdelivery@gmail.com', 'WSU Dining Delivery');
    $mail->addAddress('afnanatif@gmail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} */
   
?>