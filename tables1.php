<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE CONTACTDETAILS(
name VARCHAR(30),
phno VARCHAR(10),
email VARCHAR(50),
subject VARCHAR(80),
message VARCHAR(100)
)";

if ($conn->query($sql) === TRUE) 
{
  
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>