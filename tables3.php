<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE BOOKINGDETAILS(
Name VARCHAR(30) NOT NULL, 
Phno VARCHAR(10) NOT NULL PRIMARY KEY,
Email VARCHAR(50),
Department VARCHAR(30),
PurposeofApointment VARCHAR(50),
SelectDate DATE,
SelectTime TIME
)";

if ($conn->query($sql) === TRUE) 
{
  
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>