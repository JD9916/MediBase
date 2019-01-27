<?php
  session_start();
?>

<html>
<head><title>Hello World</title></head>

<body>
  <form action= "Database.php" method= "POST">
    <input type= "text" name="name_first" value= "" placeholder= "first name">
    <input type= "text" name= "name_last" value= "" placeholder= "last name" >
    <input type= "submit" name= "submit" value= "submit">
  </form>

</body>

</html>
