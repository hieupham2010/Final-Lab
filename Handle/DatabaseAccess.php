<?php
    // $serverName = "localhost";  
    // $Name = "root";
    // $password = "";
    // $dbName = "restaurant";
    // $connection = new mysqli($serverName , $Name , $password ,$dbName);
    // if($connection->connect_error) {
    //     die("Connection failed: " . $connection->connect_error);
    // }
    $serverName = "w1kr9ijlozl9l79i.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";  
    $Name = "xdw2fdn43pz76txj";
    $password = "gjmovzok0oexxxx3";
    $dbName = "dyslg02rl6npj47n";
    $connection = new mysqli($serverName , $Name , $password ,$dbName);
    if($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>