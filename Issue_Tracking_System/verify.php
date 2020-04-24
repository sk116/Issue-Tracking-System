<?php

if (!isset($_SERVER['HTTP_REFERER'])) {
    exit();
}
$dbhandler = new PDO('mysql:host=localhost:3306;dbname=issue_tracking_system', 'root', '');
$dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from user_info where vuserName = ? and vpassword = ? and vposition = ?";
$query = $dbhandler->prepare($sql);
$query->execute(array($_POST['username'], $_POST['password'],$_POST['usertype']));
$count = $query->rowCount();
if ($count > 0)
{
    setcookie('username', $_POST['username']);
    session_start();
    $_SESSION['started'] = 1;
    $_SESSION['passwd'] = $_POST['password'];
    switch ($_POST['usertype'])
    {
        case 'TESTER':
            echo $_POST['usertype'];
            header('Location: tester/tester_page.php');
            break;
        case 'DEVELOPER':
            header('Location: developer/dev_page.php');
            break;
        case 'EXPERT':
            header('Location: expert/expert_page.php');
            break;
        case 'PROJECT_HEAD':
            header('Location: head/prohead_page.php');
            break;
        case 'SUPER_ADMIN':
            header('Location: admin/super_page.php');
            break;
        default :
            break;
    }
}
 else {
    header('Location: /Issue_Tracking_System/index.html');
}
?>

