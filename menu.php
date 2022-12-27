<?php
session_start();
include('userconn.php');
$status="";
if (isset($_POST['food_id']) && $_POST['food_id']!=""){
$food_id = $_POST['food_id'];
$result = mysqli_query($connection,"SELECT * FROM food WHERE food_id='$food_id'");
$row = mysqli_fetch_assoc($result);
$food_name = $row['food_name'];
$food_id= $row['food_id'];
$food_price = $row['food_price'];

$cartArray = array(
	$food_id=>array(
	'food_name'=>$food_name,
	'food_id'=>$food_id,
	'food_price'=>$food_price,
	'food_quantity'=>1)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Food is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($food_id,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Food is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Food is added to your cart!</div>";
	}

	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ice Cream Menu</title>
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

		/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  letter-spacing: 2px;
  border: none;
  outline: none;
  cursor: pointer;
  margin-top: 4.5%;
  padding: 14px 16px;
  font-size: 17px;
  width: 15%;
}

.tablink:hover {
  background-color: #b5965e;
  color: black;
  transition: 0.5s ease;
}

.tabs {
	width: 100%;
	margin-left: 3%;
	margin-bottom: 5%;
}

.tabcontent {
  color: white;
  display: none;
  padding: 110px 40px;
  height: 100%;
}

.table td,tr { color: white; }

.sweet_tooth
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

			.product_wrapper {
	background-color: black;
    color: white;
    border: 3px solid black;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	font-size: 12px;
    float: left;
	margin-top: 5%;
	margin-left: 7%;
	margin-right: 70px;
	margin-bottom: 40px;
	width: 200px;
	height: 320px;
    padding: 10px;
    padding-top: 20px;
	text-align: center;
    }
    
.product_wrapper:hover {
    box-shadow: 0 0 0 2px white;
    background: white;
	color: black; 
	cursor: pointer;
	transition: 0.5s ease;
    }
    
.product_wrapper .name {
    font-weight:bold;
    }
    
.product_wrapper .buy {
    text-transform: uppercase;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background: white;
    border: 1px solid white;
    cursor: pointer;
    color: black;
    padding: 8px 40px;
    margin-top: 10px;
}

.product_wrapper .buy:hover {
    background: white;
    color: white;
	background-color: black;
    border-color: black;
	transition: 0.5s ease;
}

.message_box .box{
	padding: 20px;
    text-align: center;
    font-weight: bold;
    background-color: black;
    color: white;
	font-family: monospace;
	font-weight: lighter;
	font-size: 14px;
    }

	.cart_div {
	float: left;
	font-weight:bold;
    position:absolute;
    top: 20px;
    left: 25px;
    }
    
.cart_div a {
    color: white;
    float: left;
    text-decoration: none;
    }	
    
.cart_div span {
	font-size: 12px;
    line-height: 14px;
    background: transparent;
    padding: 5px;
    border-radius: 50%;
	position: absolute;
    top: 1px;
    left: 8px;
    color: red;
    width: 14px;
    height: 20px;
    text-align: center;
    }

form {
	text-align: center;
	margin-top: 2%;
	margin-bottom: 2%;
}

form .the-bar {
	width: 200px;
	border: 1px solid black;
	padding: 4px;
	background-color: black;
	color: white;
}

form .button {
	width: 100px;
	height: 21px;
	color: black;
	background-color: white;
	border: none;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
			<div class="sweet_tooth">Sweet Tooth</div>
            <nav>
              <ul>
              <li><a href="index.html">RETURN</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="user-logout.php">LOG OUT</a></li>
              </ul>
            </nav>
          </div>
        </div> 
			</div>	

			<div class="message_box">
			<?php echo $status; ?> </div>	
	
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="./images/shopping-cart.png" height="25"/> 
<br>Cart<span><?php echo $cart_count; ?></span></a>
</div>

<?php
}

$result = mysqli_query($connection,"SELECT * FROM `food`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			 <img src='{$row["food_image"]}' width='140px'>
			  <input type='hidden' name='food_id' value=".$row['food_id']." />			
			  <div class='food_name'>".$row['food_name']."</div>
			  <div class='food_type'>Type: ".$row['food_type']."</div>
				 <div class='food_price'>RM".$row['food_price']."</div>
				 <div class='food_quantity'>".$row['food_quantity']." left</div>
				 <div class='food_availability'>".$row['food_availability']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($connection);
?>

<div style="clear:both;"></div>

	</body>
</html>