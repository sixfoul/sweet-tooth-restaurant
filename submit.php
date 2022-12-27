<?php
	$user_id=$_POST['user_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phoneNo=$_POST['phoneNo'];
	$servername = "localhost";
	$UserID = "root";
	$UserName = "";
	$dbname = "sweettooth";

	// create connection
	$conn = new mysqli($servername,$user_id,$username,$dbname);
	// check connection
	if ($conn->connect_error){
		die("Connection failed:" . $conn ->connect_error);
}
	echo "Connection successful <br>";
	$sql = "INSERT INTO user (user_id, username, password, phoneNo) VALUES ('$user_id' , '$username', '$password', '$phoneNo')";

if ($conn->query($sql) === TRUE) {
	echo "Registered successfully";
}
else {
	echo "Error!" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<DOCTYPE!html>
	<html>
		<head>
		<title>Registered successfully!</title>
		<style>
		body {
			background-color: black;
		}

        p {
            color: white;
            font-weight: bold;
            letter-spacing: 2px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
            text-align: center;
        }
	</style>
</head>
<body>
    <p>DIRECTING TO SWEET TOOTH'S MENU, PLEASE WAIT.</p>
    <?php
		echo "<script type='text/javascript'>alert('Account created successfully!');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=options.php\"/>";
    ?>
</body>
	</html>
</DOCTYPE>