<?php
if (!isset($_SERVER['HTTP_REFERER']))
{
    header("Location: /Issue_Tracking_System/index.html");
}
session_start();
$_SESSION['name'] = $_POST['first_name']." ".$_POST['last_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['position'] = $_POST['subject'];
$fname = substr($_POST['first_name'], 0, 1);
$lname = substr($_POST['last_name'], 0, 1);
$_SESSION['short'] = $fname.$lname;
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->isHTML();
$mail->SMTPDebug = 1;
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'gatusoni925@gmail.com';
$mail->Password = '9601927764';
$mail->SetFrom('gatusoni925@gmail.com','noreply@gmail.com');
$subject = "OTP";
$otp = rand(1000000,9999999);
$_SESSION['otp'] = $otp;
$messege = "Hi ".$_POST['first_name']." Your OTP is ".$otp.".";
$email = $_POST['email'];
$mail->Subject = $subject;
$mail->Body = $messege;
$mail->addAddress($email);
$mail->send();
header("Location: /Issue_Tracking_System/sign-up/vcc.php");
?>