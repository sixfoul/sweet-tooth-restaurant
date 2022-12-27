<?php 
	session_start();
	include("conn.php");
	
	$id = $_POST["staff_userid"];
	$pword = $_POST["password"];
	
	$query = "SELECT * FROM staff WHERE staff_userid = '".$id."' AND password = '".$pword."'";
	$result = mysqli_query($connection, $query);
	$numRow = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
	if($numRow == 0)
	{
		echo "<script type='text/javascript'>alert('USERNAME and PASSWORD does not exist');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=staff_login.php\"/>";
	}
	else
	{
		session_start();
		$_SESSION["staff_userid"] = $row["staff_userid"];
		$_SESSION["password"] = $row["password"];
		$_SESSION["log"] = 1;
		header("Location:staff-option.php");
	}
?>