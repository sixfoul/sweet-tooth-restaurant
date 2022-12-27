<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User and Order Submissions</title>
<style>
		*
		{
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		}

		p { color: white; }
	
		body {
		background:url(./images/staff-menu.jfif);
        background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
		}
	
		.header
		{
		  width:100%;
		}
	
		.navbar
		{
		  max-width: 1200px;
		  width: 90%;
		  display: flex;
		  align-items: center;
		  justify-content: space-between;
		  margin: auto;
		  padding-top: 30px;
		}
	
		.navbar nav ul li
		{
		  list-style: none;
		  display: inline-block;
		  margin-right: 5px;
		}
	
		nav ul li a
		{
		  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		  letter-spacing: 2px;
		  text-decoration: none;
		  color: #fff;
		  font-size: 14px;
		  padding: 5px 2px;
		}
	
		nav ul li a:hover {
      font-weight: bold;
      font-size: 18px;
      transition: 0.5s ease;
    }
	
		.box
		{
		  background-color: black;
		  width: 100%;
		  height: 80px;
		}
	
		nav ul li a.active
		{
		  color: white;
		  font-weight: bold;
		}

		/* header content ends here */

		h1 {
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			color: white;
			margin-top: 12px;
			text-align: center;
			margin-bottom: 12px;
		}

		fieldset 
		{
			display: block;
			margin-left: 100px;
			margin-right: 100px;
			padding-top: 0.35em;
			padding-bottom: 0.625em;
			padding-left: 1.5em;
			padding-right: 1.5em;
			border: none;
		}

        .view_user
			{
				font-family: Georgia, 'Times New Roman', Times, serif;
				text-transform: capitalize;
				font-weight: bold;
				letter-spacing: 1px;
				font-size: 22px;
				color: white;
				text-align: center;
				margin-left: 5%;
			}

		/* Style tab links */

.page {
    margin: auto;
    margin-top: 5%;
	width: 80%;
	background-color: black;
	border-style: solid;
	border-width: 3px;
	border-color: white;
	padding: 5px;
    padding-top:20px;
    padding-bottom: 50px;
    margin-bottom: 5%;
	}
 
th {
    background-color: white;
    color: black;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: bold;
    text-align: center;
}

th:hover {
    background-color: black;
    color: white;
}

tr {
    background-color: black;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: light;
    text-align: center;
}

tr:hover {
    color: black;
    background-color: white;
    transition: 0.2s ease;
}

table {
	margin: auto;
	border-collapse: collapse;
    width: 70%;
    border-style: solid;
    border-color: white;
}

td, th {
	border: 2px solid white;
	text-align: center;
    padding: 8px;
} 

.nav {
    width: 100%;
    text-align: center;
    margin-top: 12px;
    margin-bottom: 30px;
}

.nav a {
    justify-content: center;
    text-decoration: none;
    text-align: center;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 16px;
    margin-right: 10px;
}

.nav a:hover {
    font-weight: bold;
}

</style>
</head>
<body>
<div class="header">
        <div class="box">
          <div class="navbar">
            <div class="logo">
            <a href="index.html"><img src="./images/logo.png" height="30"></a>
			</div>
			<div class="view_user">Submitted Orders</div>
            <nav>
              <ul>
              <li><a href="staff-option.php">RETURN</a></li>
                <li><a href="staffmenu.html">MENU</a></li>
                <li><a href="user-logout.php">LOG OUT</a></li>
              </ul>
            </nav>
          </div>
        </div> 
			</div>	


<div class="page">
    <div class="nav">
<a href="view-food.php">SHOW ALL FOOD</a>
<a href="staffmenu.html">EDIT FOOD</a>
<a href="view-user.php">SHOW USERS</a>
</div>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table, th, td
      {
        border: 1px solid black;
        padding: 10px;
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>

  <h1>List of Users</h1>
  <?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "sweettooth";

$connect = mysqli_connect($hostname,$username,$password)
			OR die("Connection failed");

$dbselected = mysqli_select_db($connect,$dbname)
			OR die("Database cannot be accessed");
	  

$sql = "SELECT user_id, username, phoneNo FROM user";
$result = $connect->query($sql);

if($result->num_rows > 0)
{
  echo "<table><tr><th>User ID</th><th>Username</th><th>Phone Number</th></tr>";

  //output data of each row
  while($row = $result->fetch_assoc()){
	echo "<tr><td>". $row["user_id"]. "</td><td>".$row["username"]."</td><td>". $row["phoneNo"]."</td></tr>";
  }
	echo "</table>";
}
  else {
	echo "0 results";
  }

  $connect->close();
?>
<br>
<br>
<h1>List of Submitted Orders</h1>
    <?php

	  $hostname = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "sweettooth";
	  
	  $connect = mysqli_connect($hostname,$username,$password)
				  OR die("Connection failed");
	  
	  $dbselected = mysqli_select_db($connect,$dbname)
				  OR die("Database cannot be accessed");
	  	  

      $sql = "SELECT options_id, options_type, date, time, options_qty FROM options";
      $result = $connect->query($sql);

      if($result->num_rows > 0)
      {
        echo "<table><tr><th>Options ID</th><th>Options Type</th><th>Date</th><th>Time</th><th>Customers Quantity</th></tr>";

        //output data of each row
        while($row = $result->fetch_assoc()){
          echo "<tr><td>". $row["options_id"]. "</td><td>".$row["options_type"]."</td><td>". $row["date"]."</td><td>".$row["time"]."</td><td>".$row["options_qty"]."</td></tr>";
        }
          echo "</table>";
      }
        else {
          echo "0 results";
        }

        $connect->close();
    ?>
  </body>
</html>

</div>
</body>