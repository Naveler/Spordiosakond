<?php

function dbConnection(){
    $db_server = 'localhost';
    $db_andmebaas = 'tiim1ita19iktkhk_Spordiosakond';
    $db_kasutaja = 'tiim1ita19iktkhk_mfer';
    $db_salasona = 'qwertyqwertyqwerty';
//ühendus andmebaasiga
    $yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
    //ühenduse kontroll
    if(!$yhendus){
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
    else{

    }
}
?>