<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["food_id"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:white;'>
		Food selected is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['food_id'] === $_POST["food_id"]){
        $value['food_quantity'] = $_POST["food_quantity"];
        break; // Stop the loop after we've found the food
    }
}
  	
}
?>
<html>
<head>
<title>Shopping Cart</title>
<style>
*
{
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		}

		p { color: white; }
	
		body {
		background-color: black;
		background-image: url(./images/checkout-background.jfif);
		color: white;
		font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		font-size: 14px;
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

		/* header content ends here */

.cart {
	border: 3px solid white;
	background-color: black;
	width: 100%;
	padding-top: 50px;
	padding-right: 50px;
	padding-bottom: 50px;
}

.cart_div {
	margin-bottom: 12px;
}

.cart_div span {
	text-decoration: none;
	color: white;
}

.cart .remove {
	background-color: white;
	font-weight: bold;
	padding: 5px;
	margin-top: 8px;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.cart .remove:hover {
	background-color: black;
	color: white;
	transition: 0.3s ease;
	font-weight: bold;
}

.message_box .box {
	padding: 12px;
	padding-top: 10px;
	background-color: black;
	text-align: center;
}

table {
	margin-top: 12px;
	width: 100%;
}

table th {
	margin-top: 5px;
	text-align: center;
	color: #c3a57c;
}

table td {
	text-align: center;
}

table th, tr, td {
	padding: 12px;
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
			<div class="sweet_tooth">Sweet Tooth: Shopping Cart</div>
            <nav>
              <ul>
              <li><a href="/sweettooth/menu.php">RETURN</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="user-logout.php">LOG OUT</a></li>
              </ul>
            </nav>
          </div>
        </div> 
			</div>	

    <div class="cartpage">
<div style="width:700px; margin:50 auto;">
  
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="./images/shopping-cart.png" height='30' /> <br> 
<span>Cart <?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0.00;

?>	
<table>
<tbody>
<tr>
<th>Food Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Total Price</th>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><?php echo $product["food_name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='food_id' value="<?php echo $product["food_id"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='food_id' value="<?php echo $product["food_id"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='food_quantity' class='food_quantity' onchange="this.form.submit()">
<option <?php if($product["food_quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["food_quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["food_quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["food_quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["food_quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "RM".$product["food_price"]; ?></td>
<td><?php echo "RM".$product["food_price"]*$product["food_quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["food_price"]*$product["food_quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "RM".$total_price; ?></strong>
</td>
</tr>
<tr>
	<td><a href="thank_you.html" style="text-decoration:none; color: white;"><b>CONFIRM ORDER >></b></a></td>
</tr>
</tbody>
</table>		
  <?php
}else{
    echo "<h3>Your cart is empty!</h3>";

	}
?>
</div>
<div style="clear:both;"></div>

</div>

</div>
</div>
</body>
</html>