<?php

session_start();

// Cookie & Session ($_COOKIE vs $_SESSION)


setcookie("veznev", "Horvath", time() + 3600 ); //1 óráig érvényes a cookie
setcookie("kernev", "Anita", time() + 3600 * 24); //1 napig érvényes a cookie


$_SESSION["kedvenc_szin"] = "zold";
$_SESSION["kedvenc_allat"] = "kutya";

// remove all session variables - a sessionből törli az összes változót
session_unset();
// destroy the session - megsemmisíti a session-t
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_COOKIE["veznev"]) && isset($_COOKIE["kernev"])){
            echo $_COOKIE["veznev"] . "<br>";
            echo $_COOKIE["kernev"] . "<br>";
        }


        if(isset($_SESSION["kedvenc_szin"])){
            echo $_SESSION["kedvenc_szin"] . "<br>";
        }


    ?>
</body>
</html>