<?php

try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "create table User_Info ( 
        vuserName VARCHAR(30) NOT NULL primary key,
        vemployeeName VARCHAR(30) NOT NULL,
        vpassword VARCHAR(10) NOT NULL,
        vemailId VARCHAR(30) NOT NULL,
        vposition VARCHAR(12) NOT NULL
		)";
    $query = $dbhandler->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
?>
