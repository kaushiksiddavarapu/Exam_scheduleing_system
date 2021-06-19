<?php

$cemail=$_POST["cemail"];
$cphone=$_POST["cphone"];
$cpin=$_POST["cpin"];


//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";


$conn = new mysqli("localhost", "k","kaushik","proj");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$qry="INSERT INTO contact(cemail,cphone,cpincode) 
VALUES ('$cemail', '$cphone', '$cpin')";



if ($conn->query($qry) === TRUE) {
   echo "we will contact you shortly";
} else {
  echo "Error: " . $qry . "<br>" . $conn->error;
}

?>