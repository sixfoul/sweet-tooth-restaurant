<!DOCTYPE html>
<?php 

    include("userconn.php");
?>

<?php include('options-check.php'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pick Up</title>
    <style>
      *
      {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
  
      body {
        background:url(./images/thankyou.jpg);
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
	
	.title h2
    {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: lighter;
      color: white;
      float: left;
      margin-left: 43%;
      padding-top: 25px;
    }
	
	.pickup-box
    {
      width: 35%;
      height: 55%;
      background-color: black;
      float: center;
      margin-top: 5%;
      margin-left: 32%;
    }
	
    .pickup-box h1
    {
      color: #b5965e;
	  text-align: left;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: bold;
      font-size: 30px;
      padding: 5% 5%;
      margin-left: -8px;
    }
	
	.pickup-box label
    {
      color: white;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: lighter;
      padding-left:20px;
      font-size: 20px;
    }
	
	
    input {
            width: 490px;
            background-color: transparent;
            border: 1px solid white;
            color: white;
            padding: 5px;
            margin-left: 4%;
            margin-top: 12px;
            margin-bottom: 12px;
        }

    .btn
    {
      margin-left:28%;
      margin-top:8px;
      padding:10px 70px;
      background-color:#b5965e;
      border-color: #b5965e;
      font-size:20px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: bold;
    }
	
	@media only screen and (max-width:500px)
    {
      /* For mobile phones: */
      .menu, .main, .right {
        width: 100%;
      }

      .navbar
      {
        float: right;
        margin-right: 30px;
        justify-content: space-between;
        padding-top: 25px;
      }
	  
      nav ul li a
      {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: lighter;
        text-decoration: none;
        color: #fff;
        font-size: 10px;
        padding: 10px 2px;
      }
	  
	  .title h2
      {
        font-size: 15px;
        margin-left: 70px;
        padding-top: 25px;
      }
	  
	  .pickup-box
      {
        width: 85%;
        height: 40%;
        background-color: black;
        margin-top: 10%;
        margin-left: 6%;
      }

      .pickup-box h1
      {
        color: #b5965e;
		text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: lighter;
        font-size: 20px;
        padding: 8% 5%;
      }
	  
	  .pickup-box label
      {
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: lighter;
        padding-left:20px;
        font-size: 15px;
      }
	  
	  input[type=date]
      {
        width:90%;
        height:20px;
        margin-top: 20px;
        margin-left:15px;
        margin-bottom: 20px;
    }
	
      input[type=time]
      {
        margin-left:20%;
        margin-top:10px;
        padding:10px 50px;
        font-size:15px;
        font-family:monospace;
        font-weight:lighter;
      }
	  
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
              <li><a href="index.html">HOME</a></li>
              <li><a href="contact.html">CONTACTS</a></li>
            </ul>
          </nav>
        </div>
      </div>
	  
	    <div class="pickup-box">
          <h1>Pick Up</h1>
          <form method="post" action="options-check.php">
          <input type="hidden" name="options_type" value="<?php echo $options_type="pick up"; ?>" style="border: none; margin-top: 2px; margin-bottom: 0;" readonly><br>
            <label>When you will be picking up?</label> <br>
            <input type="date" name="date" value="<?php echo $date; ?>"> <br>
            <label>What time you will be picking up?</label><br>
            <input type="time" name="time" value="<?php echo $time; ?>"><br><br>
            <button class="btn" type="submit" name="confirm"><b>Confirm</b></button>
            </form>
        </div>
	</div>
  </body>
</html>