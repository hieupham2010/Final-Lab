<?php
    $serverName = "localhost";  
    $Name = "root";
    $password = "";
    $dbName = "restaurant";
    $connection = new mysqli($serverName , $Name , $password ,$dbName);
    if($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>