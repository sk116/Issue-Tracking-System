<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}?>
<html>

    <head>
        <title>You Are Tester</title>
        <link rel="stylesheet" href="../style/css/tester_home.css">
        <link rel="icon" href="tester.png" type="image/png">
        <script>
            function myFunction1() {
                window.location.href = "/Issue_Tracking_System/tester/report_bug.php";
            }
            function myFunction2(){
                window.location.href = "/Issue_Tracking_System/bugs/Bugs.php?type=FIXED";
            }
            function myFunction3(){
                window.location.href = "/Issue_Tracking_System/bugs/viewBugs.php";
            }
            function myFunction4(){
                window.location.href = "/Issue_Tracking_System/unsetsession.php";
            }
            function myFunction5(){
                    window.location.href = "/Issue_Tracking_System/tester/edit_bug/edit.php";
            }
        </script>
    </head>

    <body>
        <div>
            <button class="btn" style="position: absolute; left: 3cm; top: 4cm;" onclick="myFunction1()"><span>Report Bug</span></button>
            <button class="btn" style="position: absolute; left: 3cm; top: 6.25cm;" onclick="myFunction2()"><span>Fixed Bugs</span></button>
            <button class="btn" style="position: absolute; left: 3cm; top: 8.5cm;" onclick="myFunction3()"><span>View Bugs</span></button>
            <button class="btn" style="position: absolute; left: 45%; top: 8.5cm;width: 350px" onclick="myFunction5()"><span>Approve or Deny Fixed Bugs</span></button>
            <div class="container" style="position: absolute; left: 45%; top: 6cm;">
                <div class="button" onclick="myFunction4()">
                    <div class="icon" >
                    </div>
                </div>
                <p style="text-align: center;">HOME</p>
            </div>
        </div>
    </body>

</html>