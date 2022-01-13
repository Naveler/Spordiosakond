<?php
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
$eesnimi = $_POST['eesnimi'];
$perenimi = $_POST['perenimi'];
$roll = $_POST['role'];
$passwordRepeat = $_POST['uuesti_parool'];

if($password!==$passwordRepeat){
    echo("Passwords don't match");
    header("Location: ../Pages/main.php");
    exit();
}

// protect against sql injection
$email = stripcslashes($email);
$password = stripcslashes($password);

$email = mysqli_escape_string($yhendus, $email);
$password = mysqli_escape_string($yhendus, $password);

// query that will be sent to mysql
$query = "INSERT INTO `kasutaja` (`id`, `eesnimi`, `perenimi`, `Kontakt`, `Role`, `Parool`) VALUES (NULL, '$eesnimi', '$perenimi', '$email', '$roll', '$password');";

// get query results from database
$result = mysqli_query($yhendus, $query);

// what happens after we get our query results
if($yhendus->query($query) === TRUE){
    ob_start();
    header("Location: ../Pages/login.php");
    ob_end_flush();
    exit();
}
else {
    echo "something went wrong";
    header("Location: ../Pages/register.php");
    exit();
}