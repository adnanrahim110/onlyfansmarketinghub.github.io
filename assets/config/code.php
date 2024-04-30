<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';


$host = "localhost";
$username = "root";
$password = "";
$database = "of_marketing_hub";


// Creating database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Checking Database connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
// Get form data
if (isset($_POST['submit_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $booking_query = "INSERT INTO mail 
    (name, email, phone, subject, message) 
    VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    $booking_query_run = mysqli_query($conn, $booking_query);

    if ($booking_query_run) {
        $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'adnankaka.786110@gmail.com';
    $mail->Password = 'avuw dqsq jzmu qubt';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setfrom($email);

    $mail->addAddress('adnankaka.786110@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body  = "Name: $name<br>
                    Email: $email<br>
                    Phone: $phone<br>
                    Message: $message"
    ;

    $mail->send();

    echo
    "
    <script>
    alert('Your Message Sent Successfully')
    document.location.href = '../../index.html';
    </script>
    ";
    } else {
        echo $mail->ErrorInfo;
        header("location: ../../index.html");
        echo "Error: " . $booking_query . "<br>" . $conn->error;
    }
}
$conn->close();