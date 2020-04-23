<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}
$add = "Location: ".$_SERVER['HTTP_REFERER'];
$dbhandler = new PDO('mysql:host=localhost:3306;dbname=issue_tracking_system', 'root', '');
$dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stat = $_GET['status'];
$bugID = $_GET['bugID'];
$approvedBy = $_COOKIE['username'];
$sql = "UPDATE bug_info SET vbugStatus=:status, vfixedBy=:name WHERE vbugId=:id";
$query = $dbhandler->prepare($sql);
$query->bindparam(':status', $stat);
$query->bindparam(':name', $approvedBy);
$query->bindparam(':id', $bugID);
$query->execute();
header($add);
?>

