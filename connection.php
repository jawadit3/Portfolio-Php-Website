<?php
$servername = "localhost";
$username = "jawad";
$password = "Farmv9x8";
$db_name = "portfolio_dbms";
$port_no = "8111";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name,$port_no);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>