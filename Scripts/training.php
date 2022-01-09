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

// mysql query
$query = 'Select * from trenn';

// sends query to db
$result = mysqli_query($yhendus, $query);
var $training = $result;

// function to get the result in other files
function GetTraining(){
    return($this -> training);
}