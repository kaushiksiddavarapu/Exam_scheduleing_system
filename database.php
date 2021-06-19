<?php

$servername = "localhost";
$username = "username";
$password = "password";
//$dbname = "myDB";

$conn = new mysqli("localhost", "k","kaushik","proj");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>