<?php
    $hostname = "localhost:3365";
    $username = "root";
    $password = "";
    $dbname = "unifo";

    $con = mysqli_connect($hostname, $username, $password, $dbname);

    // Check connection
    if (!$con) { 
        die("Connection failed: " . mysqli_connect_error());
    } 
?>