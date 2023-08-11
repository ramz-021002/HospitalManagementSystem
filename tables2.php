<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE REGISTRATIONDETAILS(
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
phno VARCHAR(10) NOT NULL PRIMARY KEY,
email VARCHAR(50),
password VARCHAR(80)
)";

if ($conn->query($sql) === TRUE) 
{
  
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>