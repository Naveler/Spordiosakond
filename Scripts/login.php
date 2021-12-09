<?php
require 'db.php';
dbConnection();
$db_server = 'localhost';
$db_andmebaas = 'tiim1ita19iktkhk_Spordiosakond';
$db_kasutaja = 'tiim1ita19iktkhk_mfer';
$db_salasona = 'qwertyqwertyqwerty';

// ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

//
$perenimi = $_POST['perenimi'];
$eesnimi = $_POST['eesnimi'];
$password = $_POST['parool'];

// protect against sql injection
$perenimi = stripcslashes($perenimi);
$eesnimi = stripcslashes($eesnimi);
$password = stripcslashes($password);

$perenimi = mysqli_escape_string($yhendus, $perenimi);
$eesnimi = mysqli_escape_string($yhendus, $eesnimi);
$password = mysqli_escape_string($yhendus, $password);

// query that will be sent to mysql
$query = "Select * FROM Kasutaja WHERE eesnimi='$eesnimi' AND perenimi='$perenimi' AND Parool='$password'";
var_dump($query);

// sends query to db
$result = mysqli_query($yhendus, $query);

// gets how many rows were returned
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

// counts how many rows were returned
$count = mysqli_num_rows($result);
if($count === 1){
    echo '<script>alert("successful login")</script>';
}
else {
    echo '<script>alert("You little sheeky fuckbag")</script>';
}