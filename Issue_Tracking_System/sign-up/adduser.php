<?php

if (!isset($_SERVER['HTTP_REFERER'])) {
    header("Location: /Issue_Tracking_System/index.html");
}

use PHPMailer\PHPMailer\PHPMailer;

session_start();
try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into user_info (vuserName,vemployeeName,vpassword,vemailId,vposition) values (?,?,?,?,?)";
    $query = $dbhandler->prepare($sql);
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
    $password = substr(str_shuffle($chars), 0, 10);
    $position = $_SESSION['position'];
    $nm = $_SESSION['short'];
    $username = $nm . "@" . $position;
//    $sql2 = "insert into users (vuserName,vpassword,vposition) values (?,?,?)";
//    $query2 = $dbhandler->prepare($sql2);
    $query->execute(Array($username, $name, $password, $email, $position));
//    $query2->execute(Array($username, $password, $position));
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
    $mail->SetFrom('gatusoni925@gmail.com', 'noreply@gmail.com');
    $subject = "Registration";
    $messege = "Hi "
            . $_POST['name'] . " Your Username is \"" . $username . "\" and "
            . "Password is \"" . $password . "\".";
    $email = $_SESSION['email'];
    $mail->Subject = $subject;
    $mail->Body = $messege;
    $mail->addAddress($email);
    $mail->send();
    session_unset();
    session_destroy();
    header("Location: /Issue_Tracking_System/index.html");
} catch (PDOException $e) {
    echo 'Probably user already exist.';
}
?>

