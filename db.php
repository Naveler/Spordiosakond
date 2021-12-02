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
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    else{

    }
    echo("<a href='login.php'>You are not supposed to be here</a>");
}
?>