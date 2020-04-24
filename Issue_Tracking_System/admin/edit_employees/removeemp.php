<?php

session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}
use PHPMailer\PHPMailer\PHPMailer;
if ($_GET['passwd'] == $_SESSION['passwd']) {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $unm = $_GET['E_U_NAME'];
    $sql0 = "select * from user_info where vuserName = ?";
    $sql = "DELETE FROM user_info WHERE vuserName = ?";
    $stmt0 = $dbhandler->prepare($sql0);
    $stmt0->bindValue(1, $unm);
    $stmt0->execute();
    $row = $stmt0->fetch(PDO::FETCH_ASSOC);
    $email = $row['vemailId'];
    $stmt = $dbhandler->prepare($sql);
    $stmt->bindValue(1, $unm);
    $var = $stmt->execute();

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
    $subject = "Deployment";
    $messege = "You are fired from your department.For any query approach ADMIN.";
    $mail->Subject = $subject;
    $mail->Body = $messege;
    $mail->addAddress($email);
    $mail->send();
    header("Location: /Issue_Tracking_System/admin/super_page.php");
}
else{
    echo 'Invalid Admin Password';
}
?>
