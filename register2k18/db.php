<?php
   //$conn = mysqli_connect("localhost","vishal_kothari","register2k18","vishal_kothari");
   
   
   
$host = 'localhost';
$user = 'root';
$password = '';
$db='registration' ;


// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   
  
?>