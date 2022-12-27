<!DOCTYPE html>
<?php
	session_start();
	include("userconn.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    *
    {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background:url(./images/backgroundcookie.jfif);
      background-size: cover;

    }

    .header
    {
      width:100%;
      height:100vh;
    }

    .logo {
      position: relative;
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
      margin-bottom: 50px;
    }
    .login-box label
    {
      color: white;
      font-family: monospace;
      font-weight: lighter;
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
    .sign-up-box
    {
      width: 37%;
      height: 75%;
      background-color: #e3e3e3;
      float: right;
      margin-top: 5%;
      margin-right: 10%;
    }
    .sign-up-box h1
    {
      color: #b5965e;
      font-family: monospace;
      font-weight: lighter;
      font-size: 30px;
      padding: 8% 5%;
    }
    .sign-up-box hr
    {
      width: 90%;
      margin-left: 20px;
      margin-bottom: 20px;
      border-color: black;
    }
    .sign-up-box label
    {
      color: black;
      font-family: monospace;
      font-weight: lighter;
      padding-left:20px;
      font-size: 20px;
    }

    @media only screen and (max-width:500px)
    {
      /* For mobile phones: */
      .menu, .main, .right {
        width: 100%;
      }

      nav ul li a
      {
        font-family: monospace;
        font-weight: lighter;
        text-decoration: none;
        color: #fff;
        font-size: 13px;
        padding: 5px 2px;
      }

      .login-box
      {
        width: 85%;
        height: 40%;
        background-color: black;
        margin-top: 5%;
        margin-left: 6%;
      }

      .login-box h1
      {
        color: #b5965e;
        font-family: monospace;
        font-weight: lighter;
        font-size: 20px;
        padding: 8% 5%;
      }
      .login-box hr
      {
        width: 90%;
        margin-left: 17px;
        margin-bottom: 20px;
      }

      .login-box label
      {
        color: white;
        font-family: monospace;
        font-weight: lighter;
        padding-left:20px;
        font-size: 15px;
      }

      .sign-up-box
      {
        width: 37%;
        height: 40%;
        background-color: #e3e3e3;
        margin-top: 60%;
        margin-right: 10%;
      }

      input[type=text]
      {
        width:90%;
        height:20px;
        margin-top: 20px;
        margin-left:15px;
        margin-bottom: 20px;
    }
    input[type=submit]
    {
      margin-left:23%;
      margin-top:10px;
      padding:10px 50px;
      font-size:15px;
      font-family:monospace;
      font-weight:lighter;
    }
    .sign-up-box
    {
      width: 85%;
      height: 46%;
      margin-top: 2%;
    }
    .sign-up-box h1
    {
      font-size: 20px;
      padding: 5% 5%;
    }
    .sign-up-box label
    {
      padding-left:20px;
      font-size: 15px;
    }
    .sign-up-box hr
    {
      width: 90%;
      margin-left: 15px;
      margin-bottom: 10px;
      border-color: black;
    }
  }
    </style>
  </head>
  <body>
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
                <li><a href="menu.html>MENU</a></li>
                <li><a href="login.php" class="active">LOGIN</a></li>
                <li><a href="contact.html">CONTACTS</a></li>
                <li><a href="login.php"><u>ORDER NOW!</u></a></li>
              </ul>
            </nav>
          </div>
        </div>


        <div class="login-box">
          <h1>Login</h1>
          <hr>
            <form action="userLoginCheck.php" method="POST">
            <!-- user ID -->
            <table>
            <tr>
              <td>
              <label><b>Username</b></label>
              </td>
            </tr>
            <tr>
            <td>
              <input type="varchar" id="username" name="username" placeholder="Enter username..." style="color: white; width: 500px; height: 40px; margin-left: 4%; margin-top: 5px; margin-bottom: 14px; background: transparent; border: 1px solid white; padding: 5px;"/>
            </td>
          </tr> 
            <tr>
            <!-- password -->
            <td><label><b>Password</b></label></td></tr> 
            <tr>
              <td> <input type="password" id="password" name="password" placeholder="Enter password..." style="color: white; width: 500px; height: 40px; margin-left: 4%; margin-top: 5px; margin-bottom: 5px; background: transparent; border: 1px solid white; padding: 5px;"/> </td> 
            </table>
            <br> 
              <input type="submit" class="button" value="Login">
            </form>
        </div>

        <div class="sign-up-box">
          <h1>Register</h1>
          <hr>
          <form action="submit.php" method="POST">
            <!-- register ID -->
            <table>
            <tr>
              <td>
              <label><b>Username</b></label>
              </td>
            </tr>
            <tr>
            <td>
              <input type="number" id="username" name="username" placeholder="Enter username..." style="color: black; width: 500px; height: 40px;  margin-left: 4%; margin-top: 5px; margin-bottom: 14px; background: transparent; border: 1px solid black; padding: 5px;"/>
            </td>
          </tr> 
            <tr>
            <!-- password -->
            <td><label><b>Password</b></label></td></tr> 
            <tr>
              <td> <input type="password" id="password" name="password" placeholder="Enter password..." style="color: black; width: 500px; height: 40px;  margin-left: 4%; margin-top: 5px; margin-bottom: 5px; background: transparent; border: 1px solid black; padding: 5px;"/> </td> 
              <tr>
            <!-- password -->
            <td><label><b>Phone Number</b></label></td></tr> 
            <tr>
              <td> <input type="phoneNo" id="phoneNo" name="phoneNo" placeholder="Enter phone number..." style="color: black; width: 500px; height: 40px;   margin-left: 4%; margin-top: 5px; margin-bottom: 5px; background: transparent; border: 1px solid black; padding: 5px;"/> </td> 
            </table>
            <br> 
              <input type="submit" class="button" value="Register">
            </form>
        </div>
      </div>
  </body>
</html>
