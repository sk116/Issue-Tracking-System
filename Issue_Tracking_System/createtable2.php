<?php
try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "create table Bug_Info ( 
        vbugId VARCHAR(16) primary key,
        vbugDesc VARCHAR(50),
        vcurrentBuild VARCHAR(11),
        vdateRaised DATETIME    ,
        vappName VARCHAR(11),
        vdetectedBy VARCHAR(30),
        vbugStatus VARCHAR(15),
        vfixedBy VARCHAR(30),
        vbugPriority VARCHAR(7)
		)";
    $query = $dbhandler->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
?>

