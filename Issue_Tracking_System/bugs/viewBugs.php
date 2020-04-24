<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}
try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from bug_info";
    $stmt = $dbhandler->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    
}
?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="icon" href="bug.png" type="image/png">
        <title>Bugs</title>
        <link rel="stylesheet" type="text/css" href="css/viewBug/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"
              href="viewBug/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="viewbug/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="viewBug/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css"
              href="css/viewBug/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="viewBug/css/util.css">
        <link rel="stylesheet" type="text/css" href="viewBug/css/main.css">
        <style>
            th,td{
                text-align: right;
            }
        </style>
    </head>

    <body>

        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100">
                        <table>
                            <thead>
                                <tr class="table100-head">
                                    <th class="column1">BugId</th>
                                    <th class="column2">Bug Description</th>
                                    <th class="column3">Current Build</th>
                                    <th class="column4">Date Raised</th>
                                    <th class="column5">App Name</th>
                                    <th class="column6">Detected By</th>
                                    <th class="column7">Bug Status</th>
                                    <th class="column8">Fixed By</th>
                                    <th class="column9">Bug Priority</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $stmt->fetch()) {
                                    if ($row['vbugStatus'] != 'FIXED') {
                                        ?>
                                        <tr>
                                            <td class="column1"><?php echo $row['vbugId']; ?></td>
                                            <td class="column2"><?php echo $row['vbugDesc']; ?></td>
                                            <td class="column3"><?php echo $row['vcurrentBuild']; ?></td>
                                            <td class="column4"><?php echo $row['vdateRaised']; ?></td>
                                            <td class="column5"><?php echo $row['vappName']; ?></td>
                                            <td class="column6"><?php echo $row['vdetectedBy']; ?></td>
                                            <td class="column7"><?php echo $row['vbugStatus']; ?></td>
                                            <td class="column8"><?php echo $row['vfixedBy']; ?></td>
                                            <td class="column9"><?php echo $row['vbugPriority']; ?></td>
                                        </tr>
                                        <?php }
                                }
                                ?>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>