<?php
require "session.php";
$session = new Session;
session_start();
$db_server = 'localhost';
$db_andmebaas = 'tiim1ita19iktkhk_Spordiosakond';
$db_kasutaja = 'tiim1ita19iktkhk_mfer';
$db_salasona = 'qwertyqwertyqwerty';

// ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if($yhendus==false){
    die("Failed to connect with MySQL: ". mysqli_connect_errno());
}

//
$email = $_POST['email'];
$password = $_POST['parool'];

// protect against sql injection
$email = stripcslashes($email);
$password = stripcslashes($password);

$email = mysqli_escape_string($yhendus, $email);
$password = mysqli_escape_string($yhendus, $password);

// query that will be sent to mysql
$query = "Select * FROM kasutaja WHERE Kontakt='$email' AND Parool='$password'";

// sends query to db
$result = mysqli_query($yhendus, $query);
echo '<pre>' . var_export($yhendus, true) . '</pre> Tere';

// gets how many rows were returned
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

// counts how many rows were returned
$count = mysqli_num_rows($result);
if($count === 1){
    header("Location: ../Pages/MainPage.php");
    $_SESSION["status"]='active';
    exit();
}
else {
     header("Location: ../Pages/LoginPage.php");
     exit();
}