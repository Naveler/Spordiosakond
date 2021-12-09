<?php
require 'db.php';
dbConnection();


    $perenimi= $_POST[eesnimi ];
    $eesnimi= $_POST[perenimi];
    $password= $_POST[parool];
    $query = mysqli_query("Select * FROM Kasutaja WHERE eesnimi='.$eesnimi.' AND perenimi='.$perenimi.'");
    echo($query);
    if(!$query){
        var_dump("You little shitbag");
    }