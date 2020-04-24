<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT</title>
        <link rel="icon" href="edit.png" type="image/png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script>
            function myFunction1() {
                var id = document.getElementByName("E_U_NAME");
                alert("SK116");
                if (id !== '') {
                    window.location.href = "/Issue_Tracking_System/admin/edit_employees/removeemp.php?E_U_NAME=" + id;
                }
            }
        </script>
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <div class="p-t-31 p-b-9">
                        <span class="txt1" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">
                            Employee ID
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="E_U_NAME" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">
                            Admin Password
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" id="password" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" style="font-size: 20px; font-family: Helvetica, sans-serif;" onclick="myFunction1()">
                            Remove
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>