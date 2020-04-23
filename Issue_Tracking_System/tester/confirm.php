<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}
try {
    $dbhandler = new PDO('mysql:host=localhost:3306;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into bug_info values(?,?,?,?,?,?,?,?,?)";
    $bi = $_POST['application_name'].'@'.$_POST['modulename'];
    $bd = $_POST['debug_info'];
    $cb = $_POST['current_build'];
    $dr = $_POST['dateRaised'];
    $an = $_POST['application_name'];
    $db = $_COOKIE['username'];
    $bs = 'ACTIVE';
    $fb = 'none';
    $br = $_POST['bug_severity'];
    $query = $dbhandler->prepare($sql);
    $query->execute(array($bi, $bd, $cb, $dr, $an, $db, $bs, $fb, $br));
    header('Location: tester_page.php');
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}
?>