<?php
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

require '../vendor/autoload.php';
function redirect($url, $message)
{
    header('location: ' . $url);
    $_SESSION['message'] = $message;
}
function topheading($heading)
{
    $_SESSION['topheading'] = $heading;
}
function getUserIP()
{
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
            $ip_addresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($ip_addresses[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$user_ip = getUserIP();
function getIPInfo($ip)
{
    // Make a request to ipinfo.io API to get IP information
    $ip_info_json = file_get_contents("https://ipinfo.io/$ip/json");

    // Decode the JSON response
    $ip_info = json_decode($ip_info_json, true);

    // Return IP information
    return $ip_info;
}

$ip_info = getIPInfo($user_ip);

$ip = $ip_info['ip'];
$city = $ip_info['city'];
$region = $ip_info['region'];
$country = $ip_info['country'];
$location = $ip_info['loc'];
$organization = $ip_info['org'];

if (isset($_POST['submit_btn'])) {
    $mail = new PHPMailer();

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
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('adnankaka.786110@gmail.com', $_POST['name']);

    $recipient = 'info@onlyfansmarketinghub.com';
    $mail->addAddress($recipient);

    $mail->isHTML(true);

    $mail->Subject = $subject;

    $mail->Body = 'Name: ' . $name . '<br>' .
        'Email: ' . $email . '<br>' .
        'Phone: ' . $phone . '<br>' .
        'Message: ' . $message . '<br>' .
        'IP Address: ' . $user_ip . '<br>' .
        'City: ' . $city . '<br>' .
        'Region: ' . $region . '<br>' .
        'Country: ' . $country . '<br>' .
        'Organization: ' . $organization . '<br>' .
        'From: ' . $email;

    $mail->AltBody = 'Name: ' . $name . '\n' .
        'Email: ' . $email . '\n' .
        'Phone: ' . $phone . '\n' .
        'Message: ' . $message . '\n' .
        'IP Address: ' . $user_ip . '<br>' .
        'City: ' . $city . '<br>' .
        'Region: ' . $region . '<br>' .
        'Country: ' . $country . '<br>' .
        'Organization: ' . $organization . '<br>' .
        'From: ' . $email;


    $mail->send();
    redirect("../index", "Thank you for submitting your query to <span class=\"text-primary\">OnlyFans Marketing Hub</span>.<br> 
        One of our consultants will be in touch with you shortly to discuss next steps.");
    topheading('Thankyou 😊');
} else {
    redirect("../index", "Something Went Wrong: " . $mail->ErrorInfo);
    topheading('Oops ‼️');
}
