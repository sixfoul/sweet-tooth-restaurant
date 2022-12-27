<!DOCTYPE html>
<?php 

    include("conn.php");
?>

<?php include('macarons-code.php'); ?>

<?php 
	if (isset($_GET['edit'])) {
		$food_id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM food WHERE food_id=$food_id");

		/*if (count($record) ==1) */ {
			$n = mysqli_fetch_array($record);
            $food_name = $n['food_name'];
            $food_price = $n['food_price'];
            $food_quantity = $n['food_quantity'];
            $food_availability = $n['food_availability'];
            $food_image = $n['food_image'];
		}
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Edit Main Menu</title>
		<style>
		*
		{
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		}
	
		body {
		  background:url(./images/staff-menu.jfif);
          background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
		}
	
		.header
		{
		  width:100%;
		  height:100vh;
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

        .content {
            width: 60%;
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
        }

        .content table {
            background-color: black;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            letter-spacing: 1px;
            border: 1px solid white;
            border-collapse: collapse;
        }

        .content th, tr, td {
            border: 2px solid white;
            padding: 10px;
            font-size: 14px;
            text-align: center;
        }
        
        /* update and editing and saving form */

        form {
            border: 2px solid white;
            margin-top: 20px;
            padding: 20px;
            background-color: black;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 14px;
        }


        /* button */

        button {
            width: 20%;
            margin-left: 40%;
            background-color: #b5965e;
            color: black;
            border: none;
            padding: 10px 32px;
            margin-top: 20px;
        }

        input {
            width: 300px;
            background-color: transparent;
            border: 1px solid white;
            color: white;
            padding: 5px;
        }

        .msg {
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
            text-align: center;
            margin-top: 20px;
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
            <nav>
              <ul>
              <li><a href="/sweettooth/staffmenu.html">RETURN</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
              </ul>
            </nav>
          </div>
        </div> 
    
        <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php $result = mysqli_query($db, "SELECT * FROM food"); ?>

    <?php
        if(isset($_SESSION["log"]))
        {
            $food_type="macarons";
            $sql = "SELECT * FROM food WHERE food_type LIKE '%".$food_type."%'";
            $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        }
    ?>

        <div class="content">
            <table>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Price (RM)</th>
                    <th>Quantity</th>
                    <th>Availability</th>
                    <th>Image URL</th>
                    <th>Options</th>
                </tr>
                <?php
                $x = 1;
                while($row = mysqli_fetch_array($result))
                {
            ?>
                <tr>
                    <td> <?php echo "<img src='{$row["food_image"]}' height='100px' >" ?> </td>
                    <td> <?php echo $row["food_name"] ?> </td>
                    <td> <?php echo $row["food_price"] ?> </td>
                    <td> <?php echo $row["food_quantity"] ?> </td>
                    <td> <?php echo $row["food_availability"] ?> </td>
                    <td> <?php echo $row["food_image"] ?> </td>  
                    <td> <a href="staffmenu-macarons.php?edit=<?php echo $row['food_id']; ?>" class="edit_btn" style="text-decoration:none; color: white;">Edit</a> 
                     <br> <a href="macarons-code.php?del=<?php echo $row['food_id']; ?>" class="del_btn" style="text-decoration:none; color:white;" onclick="return check()">Delete</a> </td>  
                </tr>
                <?php
                $x++;
                }
            ?>
            </table>

            <form method="post" action="macarons-code.php" >
            <h2><center>Editing Section</center></h2>
            <br>
            <table style="border: hidden; width: 50px; margin-left: auto; margin-right: auto;">
    <input type="hidden" name="food_id" value="<?php echo $food_id; ?>">
    <tr>

			<th style="border: hidden; text-align: justify;"><label>Name</label></th>
			<td style="border: hidden; text-align: justify;"><input type="varchar" name="food_name" value="<?php echo $food_name; ?>"></td>
    </tr>
    <tr>
 
			<th style="border: hidden; text-align: justify;"><label>Type</label></th>
			<td style="border: hidden; text-align: justify;"> <input type="varchar" name="food_type" value="<?php echo $food_type; ?>" readonly></td>
    </tr>
    <tr>
			<th style="border: hidden; text-align: justify;"><label>Price (RM)</label></th>
			<td style="border: hidden; text-align: justify;"><input type="float" name="food_price" value="<?php echo $food_price; ?>"></td>
</tr>
                <tr>
			<th style="border: hidden; text-align: justify;"><label>Quantity</label></th>
			<td style="border: hidden; text-align: justify;"> <input type="int" name="food_quantity" value="<?php echo $food_quantity; ?>"></td>
</tr>
                <tr>
			<th style="border: hidden; text-align: justify;"><label>Availability</label></th>
			<td style="border: hidden; text-align: justify;"> <input type="varchar" name="food_availability" value="<?php echo $food_availability; ?>"></td>
</tr>
<tr>
			<th style="border: hidden; text-align: justify;"><label>Image URL</label></th>
			<td style="border: hidden; text-align: justify;"><input type="varchar" name="food_image" value="<?php echo $food_image; ?>"></td>
</tr>
        </table>
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; letter-spacing: 1px; color: white;"><b>UPDATE</b></button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; letter-spacing: 1px; color: white;"><b>SAVE</b></button>
			<?php endif ?>
    </form>
        </div>
        <script>
			function check() {
				//function confirm() will produce an alert box which will return true or false
				var choice = confirm("Are you sure you want to delete this food?");
				
				if(choice == true) {
					return true;
				} else { return false; }
			}
		</script>
        <br>
        <br>
        <br>
  </body>
</html>