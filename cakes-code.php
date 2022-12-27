<?php 
session_start();
	$db = new mysqli('localhost', 'root', '', 'sweettooth');

	// initialize variables
	$food_name = "";
    $food_price = 0.0;
    $food_quantity = 0;
    $food_availability = "";
    $food_image = "";
	$food_id=0;
	$update = false;

	//To create a new record
	if (isset($_POST['save'])) {
        $food_name = $_POST['food_name'];
        $food_type = $_POST['food_type'];
        $food_price = $_POST['food_price'];
        $food_quantity = $_POST['food_quantity'];
        $food_availability = $_POST['food_availability'];
        $food_image = $_POST['food_image'];

		mysqli_query($db, "INSERT INTO food (food_name, food_type, food_price, food_quantity, food_availability, food_image) VALUES ('$food_name', '$food_type', '$food_price','$food_quantity','$food_availability', '$food_image')"); 
		$_SESSION['message'] = "New food information saved!"; 
		header('location: staffmenu-cakes.php');
	}
	
	//To edit existing record
	if (isset($_POST['update'])) {
		$food_id = $_POST['food_id'];
		$food_name = $_POST['food_name'];
        $food_price = $_POST['food_price'];
        $food_quantity = $_POST['food_quantity'];
        $food_availability = $_POST['food_availability'];
        $food_image = $_POST['food_image'];
	
		mysqli_query($db, "UPDATE food SET food_name='$food_name', food_price='$food_price', food_quantity='$food_quantity', food_availability='$food_availability', food_image='$food_image' WHERE food_id=$food_id");
		$_SESSION['message'] = "Food information updated!"; 
		header('location: staffmenu-cakes.php');
		}
		
		//To delete a record
		if (isset($_GET['del'])) {
		$food_id = $_GET['del'];
		mysqli_query($db, "DELETE FROM food WHERE food_id=$food_id");
		$_SESSION['message'] = "Food information deleted!"; 
		header('location: staffmenu-cakes.php');
		}