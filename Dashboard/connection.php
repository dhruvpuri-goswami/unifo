<?php
    $hostname = "localhost:8111";
    $dbname = "unifo";
    $username = "root";
    $password = "";

    $con = mysqli_connect($hostname, $username, $password, $dbname);

    // Check connection
    if (!$con) { 
        die("Connection failed: " . mysqli_connect_error());
    } 
?>