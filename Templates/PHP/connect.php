<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "bank";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn) {
  echo "connected successfully!";
}
else{
  echo "failed @!......";
}
$conn->close();
?>