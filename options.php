<?php 
// PHP program to pop an alert 
// message box on the screen 
  
// Display the alert box  
echo '<script>alert("Welcome back to SWEET TOOTH!")</script>'; 
  
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options</title>
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
  
      .login-box
      {
        width: 37%;
        height: 75%;
        background-color: black;
        float: left;
        margin-top: 5%;
        margin-left: 10%;
      }
      .login-box h1
      {
        color: #b5965e;
        font-family: monospace;
        font-weight: lighter;
        font-size: 30px;
        padding: 8% 5%;
      }
      .login-box hr
      {
        width: 90%;
        margin-left: 20px;
        margin-bottom: 10px;
      }
      .login-box label
      {
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: lighter;
        letter-spacing: 2px;
        padding-left:20px;
        font-size: 20px;
      }
  
      input[type=text]
      {
        width:90%;
        height:40px;
        margin-top: 20px;
        margin-left:20px;
        margin-bottom: 40px;
        color:white;
        background-color:black;
        border-color:white;
      }
  
      input[type=submit]
      {
        margin-left:28%;
        margin-top:20px;
        padding:15px 70px;
        background-color:#b5965e;
        border-color: #b5965e;
        font-size:20px;
        font-family:monospace;
        font-weight:lighter;
      }
	
	.option-box
    {
      width: 60%;
      height: 35%;
      background-color: black;
      float: center;
      margin-top: 10%;
      margin-left: 20%;
    }
	
    .option-box h1
    {
      color: #b5965e;
	  text-align: center;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: lighter;
      letter-spacing: 2px;
      font-size: 30px;
      padding: 6% 5%;
    }

    a {
      text-decoration: none;
      color: white;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 20px;
      letter-spacing: 2px;
    }

    a:hover {
      letter-spacing: 5px;
      font-weight: bold;
      transition: 0.5s ease;
    }
	
	.dine-in
    {
      float: left;
      margin-left: 20%;
      padding-top: 0%;
    }
	
    .pick-up
    {
      float: right;
      margin-right: 20%;
      padding-top: 0%;
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
        font-family: monospace;
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
	  
	  .option-box
      {
        width: 85%;
        height: 40%;
        background-color: black;
        margin-top: 10%;
        margin-left: 6%;
      }

      .option-box h1
      {
        color: #b5965e;
		text-align: center;
        font-family: monospace;
        font-weight: lighter;
        font-size: 20px;
        padding: 8% 5%;
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
	  
	    <div class="option-box">
          <h1>PICK AN OPTION</h1>
            <div class="dine-in">
            <a href="dine-in.php">DINE IN</a>
            </div>
            <div class="pick-up">
            <a href="pick-up.php">PICK-UP</a>
            </div>
        </div>
	</div>
  </body>
</html>