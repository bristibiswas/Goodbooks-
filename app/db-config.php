<?php
$servername = "localhost";
$username = "bristi2000";
$password = "bristi2000";
$dbname = "goodbooks";

// Create connection
$conn =  mysqli::__construct($servername, $username, $password, $dbname);

 //Check connection
/*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/
?>