<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../style/css/tester_home.css">
        <link rel="icon" href="head.jpg" type="image/jpg">
        <script>
            function myFunction1() {
                window.location.href = "/Issue_Tracking_System/bugs/prohead_bug.php?appName=app1";
            }
            function myFunction2() {
                window.location.href = "/Issue_Tracking_System/bugs/prohead_bug.php?appName=app2";
            }
            function myFunction3() {
                window.location.href = "/Issue_Tracking_System/bugs/prohead_bug.php?appName=app3";
            }
            function myFunction4() {
                window.location.href = "/Issue_Tracking_System/bugs/prohead_bug.php?appName=app4";
            }
            function myFunction5() {
                window.location.href = "/Issue_Tracking_System/unsetsession.php";
            }
        </script>
    </head>

    <body>
        <div>        
            <button class="btn" style="position: absolute; left: 3cm; top: 3cm;" onclick="myFunction1()"><span>App1 Bugs</span></button>
            <button class="btn" style="position: absolute; left: 3cm; top: 4.5cm;"onclick="myFunction2()"><span>App2 Bugs</span></button>
            <button class="btn" style="position: absolute; left: 3cm; top: 6cm;" onclick="myFunction3()" ><span>App3 Bugs</span></button>
            <button class="btn" style="position: absolute; left: 3cm; top: 7.5cm;" onclick="myFunction4()"><span>App4 Bugs</span></button>
            <div class="container" style="position: absolute; left: 45%; top: 6cm;">
                <div class="button" onclick="myFunction5()">
                    <div class="icon">
                        
                    </div>
                </div>
                <p style="text-align: center;">HOME</p>
            </div>
        </div>
    </body>

</html>