<!DOCTYPE html>
<?php
	session_start();
	include("conn.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Tooth: Homepage</title>
    <style>
    *
    {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background:url(./images/login-image.jfif);
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

    /* content styling */ 

    .content {
        background-color: black;
        color: white;
        width: 450px;
        height: 400px;
        margin: 0 auto;
        margin-top: 8%;
        padding: 14px;
        padding-left: 20px;
        padding-right: 25px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .content h2 {
        letter-spacing: 1px;
        margin-top: 5%;
        color: #c3a57c;
    }

    form table {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    table td {
      width: 300px;
      height: 10px;
    }

    .button {
      color: black;
      background-color: #c3a57c;
      border: none;
      font-weight: bold;
      padding: 15px 32px; 
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 14px;
      letter-spacing: 2px;
    }

    .button:hover {
      color: #c3a57c;
      letter-spacing: 5px;
      background-color: white;
      transition: 0.5s ease;
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
                <li><a href="index.html">RETURN</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="content">
            <h2>Log in as Staff</h2> <br>
            <hr> <br>
            <form action="loginCheck.php" method="POST">
            <!-- STAFF ID -->
            <table>
            <tr>
              <td>
              <label><b>Staff ID</b></label>
              </td>
            </tr>
            <tr>
            <td>
              <input type="number" id="staff_userid" name="staff_userid" placeholder="Enter staff ID..." style="color: white; width: 400px; height: 40px; margin-top: 5px; margin-bottom: 14px; background: transparent; border: 1px solid white; padding: 5px;"/>
            </td>
          </tr> 
            <tr>
            <!-- password -->
            <td><label><b>Password</b></label></td></tr> 
            <tr>
              <td> <input type="password" id="password" name="password" placeholder="Enter password..." style="color: white; width: 400px; height: 40px; margin-top: 5px; margin-bottom: 5px; background: transparent; border: 1px solid white; padding: 5px;"/> </td> 
            </table>
            <br> 
              <input type="submit" class="button" value="Login">
            </form>
        </div>
</body>
</html>