<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}
try{
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=issue_tracking_system', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from user_info";
    $stmt = $dbhandler->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    
}

?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="icon" href="edit_employees/employee.png" type="image/png">
        <title>Employees</title>
        <link rel="stylesheet" type="text/css" href="../bugs/viewBug/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"
              href="../bugs/viewBug/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../bugs/viewbug/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../bugs/viewBug/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css"
              href="css/viewBug/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="../bugs/viewBug/css/util.css">
        <link rel="stylesheet" type="text/css" href="../bugs/viewBug/css/main.css">
    </head>

    <body>

        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100">
                        <table>
                            <thead>
                                <tr class="table100-head">
                                    <th class="column1">User Name</th>
                                    <th class="column1">Employee Name</th>
                                    <th class="column2">Password</th>
                                    <th class="column3">Email ID</th>
                                    <th class="column4" style="text-align: left" >Position</th>
                                </tr>
                            </thead>
                             <tbody>
                                <?php
                                    while ($row = $stmt->fetch()){
                                        ?>
                                <tr>
                                    <td class="column1"><?php echo $row['vuserName'];?></td>
                                    <td class="column1"><?php echo $row['vemployeeName'];?></td>
                                    <td class="column2"><?php echo $row['vpassword'];?></td>
                                    <td class="column3"><?php echo $row['vemailId'];?></td>
                                    <td class="column4" style="text-align: left" ><?php echo $row['vposition'];?></td>
                                </tr>
                                <?php
                                    }?>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>