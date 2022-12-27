<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Food Available</title>
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

        .view_food
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
    width: 80%;
    border-style: solid;
    border-color: white;
}

td, th {
	border: 2px solid white;
	text-align: left;
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
			<div class="view_food">View Food</div>
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

<?php
	$servername = "localhost";
    $user_id = "root";
    $username = "";
    $food_name = "";
	$dbname = "sweettooth";
	$food_id = "";
	$conn = new mysqli($servername,$user_id,$username,$dbname);
	
	if (isset($_POST["foodSearch"]))
{
	$food_id=$_POST["food_id"];
}
$sql = "Select * FROM food WHERE food_id LIKE '".$food_id."%'";
$result = $conn->query($sql);
?>

<div class="page">
    <div class="nav">
	<a href="view-food.php">SHOW ALL FOOD</a>
<a href="staffmenu.html">EDIT FOOD</a>
<a href="view-user.php">SHOW USERS</a>
</div>

<form action="view-food.php" method="post">
	<table width="100" border="1">
		
			<th><b>Search food ID: </b>
			<input name="food_id" type="text" size="10" maxlength="5" style="width: 200px; height: 20px;"/>
            <input name="foodSearch" type="submit" value="search" 
            style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; padding: 2px; background-color: white; color: black; border: none; width: 80px; "/></th>
		
	</table>
</form>

<?php
if ($result->num_rows>0) {
// output data of each row
echo "<table>";
echo "<tr>
<th> No.</th> 
<th> Image URL </th>
<th> Food Name </th>
<th> Food Price </th>
<th> Food Quantity </th>
<th> Food Status </th> </tr>";
while ($row=$result->fetch_assoc()) {
echo "<tr>
    <td> " . $row["food_id"]. "</td>
    <td> " . $row["food_image"]. "</td>
        <td>  " . $row["food_name"]. " <br> </td> 
        <td>  RM" .$row["food_price"]. " <br> </td> 
        <td> " .$row["food_quantity"]. " <br> </td> 
        <td>  " .$row["food_availability"]. " </td> </p>
	</tr>";
}

echo "</table>";
} else {
echo "<h2> No food found! </h2>";
}

$conn->close();
?>
</div>
</body>