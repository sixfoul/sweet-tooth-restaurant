<?php 
	session_start();
	include("userconn.php");
	
	$user = $_POST["username"];
	$pword = $_POST["password"];
	
	$query = "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pword."'";
	$result = mysqli_query($connection, $query);
	$numRow = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
	if($numRow == 0)
	{
		echo "<script type='text/javascript'>alert('USERNAME and PASSWORD does not exist');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=login.php\"/>";
	}
	else
	{
		session_start();
		$_SESSION["username"] = $row["username"];
		$_SESSION["password"] = $row["password"];
		$_SESSION["log"] = 1;

		header("Location:options.php");;
	}
?>