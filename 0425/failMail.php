<html>
    <head>
        <meta charset="utf-8">
    </head>

<?php

echo "註冊失敗，信箱已被使用";
$no=$_GET["no"];
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'email'
);
$sql = "SELECT * FROM info where no='$no'";
mysqli_set_charset($link, 'utf8');
if ($result = mysqli_query($link, $sql)){
    $row = mysqli_fetch_assoc($result);
    $name=$row["name"];
    $to=$row["email"];
    $photo=$row["photo"];
}


$subject="註冊失敗";
$content="".$name.": 您已註冊，此信箱已被使用";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1104119@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('a1104119@mail.nuk.edu.tw', 'Mailer');
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    //$mail->addAddress('a1104119@mail.nuk.edu.tw');               //Name is optional
    $mail->addAddress($to);
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('photo\\'.$photo.'');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Charset = "UTF-8"; 
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
    $mail->Subject = $subject;
    $mail->Body    = $content;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
</html>
