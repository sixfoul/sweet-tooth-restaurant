<?php 
session_start();
	$db = new mysqli('localhost', 'root', '', 'sweettooth');

	// initialize variables
	$options_type = "";
    $date = "";
    $time = "";
    $options_qty = 0;
	$options_id=0;
	$update = false;

	//To create a new record
	if (isset($_POST['confirm'])) {
        $options_type = $_POST['options_type'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $options_qty = $_POST['options_qty'];

		mysqli_query($db, "INSERT INTO options (options_type, date, time, options_qty) VALUES ('$options_type', '$date', '$time','$options_qty')"); 
        header('location:menu.php');
    }
?>
	