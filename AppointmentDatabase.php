<html>
  <!-- <head>
    <meta http-equiv="Refresh" content="0; url=http://localhost/login.html" />
  </head> -->
</html>

<?php
     $Database= mysqli_connect("localhost", "root", "root", "websiteusers");
     $doctor = $_POST['doctor'];
     $date= $_POST['date'];
     $time = $_POST['time'];

     echo $doctor . " " . $date . " " . $time;
     $query="INSERT INTO appointments(doctor, date, time) VALUES ('$doctor','$date', '$time')";
     $sth = $Database->prepare($query);
     $sth->execute();
?>
