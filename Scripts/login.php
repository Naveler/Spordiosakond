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
$email = $_POST['email'];
$password = $_POST['parool'];

// protect against sql injection
$email = stripcslashes($email);
$password = stripcslashes($password);

$email = mysqli_escape_string($yhendus, $email);
$password = mysqli_escape_string($yhendus, $password);

// query that will be sent to mysql
$query = "Select * FROM Kasutaja WHERE Kontakt='$email' AND Parool='$password'";
echo '<pre>' . var_export($query, true) . '</pre> Tere';

// sends query to db
$result = mysqli_query($yhendus, $query);

// gets how many rows were returned
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo '<pre>' . var_export($row, true) . '</pre> Tere';

// counts how many rows were returned
$count = mysqli_num_rows($result);
if($count === 1){
    echo '<script>alert("successful login")</script>';
}
else {
    echo '<script>alert("You little sheeky fuckbag")</script>';
}