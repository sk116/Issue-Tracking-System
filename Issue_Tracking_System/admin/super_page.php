<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../style/css/tester_home.css">
        <link rel="icon" href="admin.png" type="image/png">
        <script>
            function myFunction1() {
                window.location.href = "/Issue_Tracking_System/bugs/Bugs.php?type=ACTIVE";
            }
            function myFunction2() {
                window.location.href = "/Issue_Tracking_System/bugs/Bugs.php?type=DUPLICATE";
            }
            function myFunction3() {
                window.location.href = "/Issue_Tracking_System/bugs/Bugs.php?type=FIXED";
            }
            function myFunction4() {
                window.location.href = "/Issue_Tracking_System/index.html";
            }
        </script>
    </head>

    <body>
        <div>        
            <button class="btn" style="position: absolute; left: 3cm; top: 3cm;" onclick="myFunction1()"><span>Active Bugs</span></button>
            <button class="btn" style="position: absolute; left: 3cm; top: 4.5cm;"onclick="myFunction2()"><span>Fixed Bugs</span></button>
            <button class="btn" style="position: absolute; left: 3cm; top: 6cm;" onclick="myFunction3()" ><span>Duplicate Bugs</span></button>
            <div class="container" style="position: absolute; left: 45%; top: 6cm;">
                <div class="button" onclick="myFunction4()">
                    <div class="icon">
                    </div>
                </div>
                <p style="text-align: center;">HOME</p>
            </div>
        </div>
    </body>

</html>