<?php
session_start();

if($_POST["user"] == "admin" && $_POST["pass"] == "123"){
    $_SESSION["login"] = true;
    header("Location: dashboard.php");
}else{
    header("Location: login.php");
}
?>