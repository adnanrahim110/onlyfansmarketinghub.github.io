<?php

session_start();
function redirect($url,$message)
{
    header('location: ' . $url);
    $_SESSION['message'] = $message;
}
function topheading($heading)
{
    $_SESSION['topheading'] = $heading;
}

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Get form data
if (isset($_POST['submit_btn'])) {
    $mail = new PHPMailer(true);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'adnankaka.786110@gmail.com';
    $mail->Password = 'xcvk pfwy wwkf bfbo';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email);

    $mail->addAddress('info@onlyfansmarketinghub.com');

    $mail->isHTML(true);

    $mail->Subject = $subject;

    $mail->Body = "Name: $name <br> 
                    Email: $email <br> 
                    Phone: $phone <br> 
                    Message: $message";


    $mail->send();
    redirect("../index", "Thank you for submitting your query to <span class=\"text-primary\">OnlyFans Marketing Hub</span>.<br> 
    One of our consultants will be in touch with you shortly to discuss next steps.");
    topheading('Thankyou 😊');
} else {
    redirect("../index","Something Went Wrong" . $mail->ErrorInfo);
    topheading('Oops ‼️');
}
$conn->close();
