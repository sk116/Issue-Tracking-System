<?php

try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into users (vuserName,vpassword,vposition) values ('SAURAV KUKADIYA','SK116','TESTER')";
    $query = $dbhandler->query($sql);
    echo "Data is inserted successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
?>

