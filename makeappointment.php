<?php
  session_start();
?>

<html lang="en">
<head>
<link rel = "stylesheet" type = "text/css" href = "appointmentCSS.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>

</script>

<style>
label {float:left;}
input[type=text] {float:left;}
</style>
</head>
<body>

<body class = "bg"></body>

<div class = "inputs">
  <form action = "adsa" method = "get">
      <h2>&nbsp;Book an Appointment</h2>
      <label>&nbsp;&nbsp;Doctor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" align="right"><br><br>
      <label>&nbsp;&nbsp;Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" align="right"><br><br>
      <label>&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" align="right"><br><br>

      <br/>
      <pre>                               <input type = "submit"></input></pre>
      <br/>
      <br/>
  </form>
</div>

</body>

<footer>
</footer>
</html>
