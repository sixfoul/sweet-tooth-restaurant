<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sweettooth";

    $connection = mysqli_connect($hostname, $username, $password)
    or die ("Could not connect to MySQL" .mysqli_error($connection));
    mysqli_select_db($connection, $database) or die("Could not select the database");


$conn = new mysqli("localhost","root","", "sweettooth");

if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

?>