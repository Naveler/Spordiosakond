<?php
$db_server = 'localhost';
$db_andmebaas = 'tiim1ita19iktkhk_Spordiosakond';
$db_kasutaja = 'mfer';
$db_salasona = 'qwertyqwertyqwerty';
//ühendus andmebaasiga
$yhendus = new mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
else{
    echo("<h1>db connection</h1>");
}
