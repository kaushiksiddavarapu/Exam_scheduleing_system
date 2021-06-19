 <?php

$sroll=$_POST["sroll"];
$spas=$_POST["spas"];
$sname=$_POST["sname"];
$yer=$_POST["yer"];
$sbranch=$_POST["sbranch"];
$sect=$_POST["sect"];
$staadhar=$_POST["staadhar"];
$sage=$_POST["sage"];
$sdob=$_POST["sdob"];
$semail=$_POST["semail"];
$ugsid=$_POST["ugsid"];

//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";


$conn = new mysqli("localhost", "k","kaushik","proj");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$qry="INSERT INTO student(sroll,spassword,sname,year,branch,section,saadhar_id,sage,sdob,semail,ugs) 
VALUES ('$sroll', '$spas','$sname','$yer','$sbranch','$sect','$staadhar', '$sage', '$sdob', '$semail', '$ugsid')";



if ($conn->query($qry) === TRUE) {
   echo " successfully registered";
} else {
  echo "Error: " . $qry . "<br>" . $conn->error;
}

?>
