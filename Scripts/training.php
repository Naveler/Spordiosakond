<?php
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
$query = 'Select trenni_id, nimi, kuupaev, algus_aeg, lopu_aeg, kus from trenn';

// sends query to db
$result = mysqli_query($yhendus, $query);
$training = $result;

// function to get the result in other files
function GetTraining(){
    global $training;
    return $training;
}
//echo '<pre>'; print_r($training); echo '</pre>'; print_r($training);