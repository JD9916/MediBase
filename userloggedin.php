<?php
session_start();
if (isset($_SESSION['username']))
{
  /*
  echo "Welcome" . " " . $_SESSION['firstname'] . " " . $_SESSION['lastname'];
  */
}
?>
<html>
<head>
  <title>Log in Session</title>
</head>
<h1> Welcome <?php echo  $_SESSION['firstname'] . " " . $_SESSION['lastname']  ?>
<body>
  <br>
</body>
</html>
