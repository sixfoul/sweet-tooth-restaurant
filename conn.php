<?php
    $hostname = "localhost";
    $staff_userid = "root";
    $password = "";
    $database = "sweettooth";

    $connection = mysqli_connect($hostname, $staff_userid, $password)
    or die ("Could not connect to MySQL" .mysqli_error($connection));
    mysqli_select_db($connection, $database) or die("Could not select the database");
?>