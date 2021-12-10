<?php
$db_server = 'localhost';
$db_andmebaas = 'tiim1ita19iktkhk_Spordiosakond';
$db_kasutaja = 'tiim1ita19iktkhk_mfer';
$db_salasona = 'qwertyqwertyqwerty';

// ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if($yhendus->connect_error){
    die("Failed to connect with MySQL: ". $yhendus->connect_error);
}
var_dump($yhendus->connect_error);
//
$email = $_POST['email'];
$password = $_POST['parool'];

// protect against sql injection
$email = stripcslashes($email);
$password = stripcslashes($password);

$email = mysqli_escape_string($yhendus, $email);
$password = mysqli_escape_string($yhendus, $password);

// query that will be sent to mysql
$query = "Select * FROM Kasutaja WHERE Kontakt='$email' AND Parool='$password'";
var_dump($query);

// sends query to db
$result = mysqli_query($yhendus, $query);
var_dump($result);
echo '<pre>' . var_export($yhendus, true) . '</pre> Tere1';

// gets how many rows were returned
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
var_dump($row);
echo '<pre>' . var_export($row, true) . '</pre> Tere2';

// counts how many rows were returned
$count = mysqli_num_rows($result);
if($count === 1){
    echo '<script>alert("successful login")</script>';
}
else {
    echo '<script>alert("You little sheeky fuckbag")</script>';
}