<!DOCTYPE html>
<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER']) || !isset($_SESSION['started'])) {
    header("Location: /Issue_Tracking_System/index.html");
}?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bug Report Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/css/report_bug.css">
    </head>
    <body style="background-image: url('img3.jpg')">
        <main>
            <div id="desc" style="background-color: ghostwhite">
                <h1>Bug Report Form</h1>
                <p>Bug reporting is an important process. It is most effective for many users to test a game all at once, rather than have one person test it over a long period of time in order to find as many software bugs as possible. This form will redirect to a page which does not exist. Regardless, I recommend using it only for reference (as comical as that sounds based on my experience (or lack thereof)) and not actually inputting any real information.</p>
                <p>Use this form to report any bugs you may find. Here is what each of the "bug severity" options mean:</p>
                <ol>
                    <li><div id="minor">Minor:</div> These are bugs that don't really affect the game's playability. Things like missing or broken textures would fit into this category.</li>
                    <li><div id="moderate">Moderate:</div> The moderate category would include bugs that affect the functionality of some of the game's less important features. For example, a problem with an object the player can pick up would fall under the moderate category.</li>
                    <li><div id="major">Major:</div> A major bug affects the playability of the game's more important feature. A door not opening would be an example of a major bug.</li>
                    <li><div id="game_breaking">Game-breaking:</div> A game-breaking bug is a glitch that makes the game unplayable, either immediately after launch or during gameplay. Game crashes (especially persistent crashes) or other issues that make the game completely unplayable would fall under this category.</li>
                </ol>
            </div>
            <div id="submit_form" style="background-color: ghostwhite" >
                <p>TESTER ID:<br></p><b><?php
                echo $_COOKIE['username'];
                ?></b>
                <form action="confirm.php" method="post">
                    <p>Bug Severity (required):</p>
                    <select name="bug_severity" id="bug_severity" required>
                        <option value="--Please Select--">--Please Select--</option>
                        <option value="Minor">Minor</option>
                        <option value="Moderate">Moderate</option>
                        <option value="Major">Major</option>
                        <option value="Huge">Game-breaking</option>
                    </select>
                    <br><br>
                    <p>Application Name :</p>
                    <select name="application_name" id="app_name" required>
                        <option value="--Please Select--">--Please Select--</option>
                        <option value="app1">app1</option>
                        <option value="app2">app2</option>
                        <option value="app3">app3</option>
                        <option value="app4">app4</option>
                    </select>
                    <br><br>
                    <p>Module Name: </p>
                    <input type="text" name="modulename">
                    <br><br>
                    <p>Current Build: </p>
                    <input type="text" name="current_build" placeholder="version">
                    <br><br>
                    <p>Please insert information about bug: </p>
                    <input type="text" name="debug_info" id="bug_info">
                    <p>Date Raised: </p>
                    <input type="date" name="dateRaised">
                    <p>Once you have confirmed everything in your bug report, hit 'submit'. You won't be able to change your bug report later.</p>
                    <input type="submit" id="submit" name="submit" value="Submit">
                </form>
            </div>
        </main>
    </body>
</html>
