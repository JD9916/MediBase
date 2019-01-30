<?php
session_start();
$Database= mysqli_connect("localhost", "root", "", "userdatabase");
if (isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM websiteusers WHERE username='$username' LIMIT 1";
  $query = mysqli_query($Database, $sql);
  $row = mysqli_fetch_array($query);
  $db_password= $row['password'];
  $firstname=$row['firstname'];
  $lastname=$row['lastname'];


  if ($password==$db_password)
  {
    $_SESSION['username']= $username;
    $_SESSION['firstname']=$firstname;
    $_SESSION['lastname']=$lastname;
    header("Location: userloggedin.php");
  }
  else
  {
    echo "You didn't enter the correct information";
    exit();
  }
}

?>
 <!DOCTYPE html>
<html lang = "en">
<head>
  <link rel = "stylesheet" type = "text/css" href = "loginCSS.css" />
<title>Log in - The Hub for your Health</title>
<meta charset="utf-8"/>
</head>
<body>
  <body class = "bg"></body>
  <h1 class = "header">The Hub for your Health</h1>
    <div class= "earth"></div>

<div class = "inputs">
  <form method="POST">
      <h2>&nbsp;Patients</h2>
      <label>&nbsp;&nbsp;Medicare ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username" id="user"><br><br>
      <label>&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="password" id="pass">
      <br/>
      <pre>                               <input type = "submit" name="submit"></input></pre>
      <a href="registerpatient.php">&nbsp;Don't have an account?</a>
      <br/>
      <a href="forgotpass.php">&nbsp;Forgot your password?</a>
    </form>
    <form action = "professionals.html" method = "get">
      <h2>&nbsp;Professionals</h2>
      <label>&nbsp;&nbsp;Medicare ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"><br><br>
      <label>&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text">
      <br/>
      <pre>                               <input type = "submit"></input></pre>
      <a href="register.html">&nbsp;Don't have an account?</a>
      <br/>
      <a href="forgotpass.html">&nbsp;Forgot your password?</a>
      <br/>
  </form>
</div>
</body>
<br/>
<footer class = "foot">
<p> Created by the <a href="aboutus.html"> Brogrammers </a> </p>
</footer>
