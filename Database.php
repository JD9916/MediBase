<html>
  <head>
    <meta http-equiv="Refresh" content="0; url=http://localhost/login.php" />
  </head>
</html>

<?php
     $Database= mysqli_connect("localhost", "root", "root", "websiteusers");
     $username = $_POST['username'];
     $password = $_POST['password'];
     $first= $_POST['name_first'];
     $middle = $_POST['name_middle'];
     $last = $_POST['name_last'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $city = $_POST['city'];
     $address = $_POST['address'];
     $dateOfBirth = $_POST['dateOfBirth'];
     $monthOfBirth = $_POST['month'];
     $yearOfBirth = $_POST['year'];
     $gender = $_POST['gender'];


     echo $first . " " . $middle . " " . $last . " " . $email . " " . $phone . " " . $city . " " . $address . " ". $dateOfBirth . " ";
     echo $monthOfBirth . " " . $yearOfBirth . " " . $gender;
     echo "username: " . $username . " password: " . $password;
     $query="INSERT INTO websiteusers(firstname, middlename, lastname, email, phone, city, address, dateOfBirth, monthOfBirth, yearOfBirth, gender, username, password) VALUES ('$first', '$middle', '$last', '$email','$phone', '$city', '$address', '$dateOfBirth', '$monthOfBirth', '$yearOfBirth', '$gender')";
     $sth = $Database->prepare($query);
     $sth->execute();

     $query="INSERT INTO websiteusers(username, password) VALUES ('$username', '$password')";
     $sth = $Database->prepare($query);
     $sth->execute();
?>
