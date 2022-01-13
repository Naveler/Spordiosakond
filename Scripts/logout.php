<?php
session_start();
if ($_SESSION["status"]=='active') {
    $_SESSION["status"]='inactive';
    header("Location: ../Pages/main.php");
    exit();
}