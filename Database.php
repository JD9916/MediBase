<?php
    $Database= mysqli_connect("localhost", "root", "root", "websiteusers");
     $first= $_POST['name_first'];
     $last= $_POST['name_last'];
     echo $first . " " . $last;
     $query="INSERT INTO websiteusers(firstname, lastname) VALUES ('$first', '$last')";
     $sth = $Database->prepare($query);
     $sth->execute();
?>
