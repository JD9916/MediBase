<?php
session_start();
$Database= mysqli_connect("localhost", "root", "", "userdatabase");
if (isset($_POST['submit'])){
  echo "php in";
  $username=$_POST['medicare'];
  $day=$_POST['day'];
  $month=$_POST['month'];
  $year=$_POST['year'];

  $sql = "SELECT * FROM websiteusers WHERE username='$username' LIMIT 1";
  $query = mysqli_query($Database, $sql);
  $row = mysqli_fetch_array($query);
  $db_username=$row['username'];
  $db_password= $row['password'];
  $db_day=$row['dateOfBirth'];
  $db_month=$row['monthOfBirth'];
  $db_year=$row['yearOfBirth'];

  if ($username==$db_username)
  {
    echo "database was entered";
    echo $day . " " . $db_day;
    if ($day==$db_day && $month==$db_month && $year==$db_year)
      echo "All information was entered correctly!";
      echo "<br>;"
    else
      echo "Error! Information incorrect!";
  }
  else
    echo "database wasn't entered, possible invalid medicare entered.";
  }
?>

<html lang="en">
<head>
  <style>
  .boxes
  {
    align-self:center;
  }
  </style>
  <title>Forgot Password</title>
</head>
<body>
  <form class="form" method="POST">
    <div>
      <label> Please enter your medicare </label> <input type="text" size="9" class ="boxes"name="medicare">
      <br>
      <label> Please enter your day of birth </label> <input type="text" size="2"class ="boxes" name="day">
      <Br>
        <label> Please enter your month of birth </label> <input type="text"size="2" class ="boxes" name="month">
        <br>
        <label> Please enter your year of birth </label> <input type="text" size="3"class ="boxes" name="year">
<br>
<input type="submit" name="submit">
    </div>
  </form>
</body>
</html
