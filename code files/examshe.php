<?php

session_start();

include ("database.php");
$temp = $_SESSION["login"];
$result1 = "SELECT sroll,sname,year,branch,section,saadhar_id,sage,sdob,semail FROM student where sroll='$temp'";
mysqli_stmt_execute($result1);
mysqli_stmt_store_result($result1);
$temp2 = "SELECT branch FROM student where sroll='$temp'";
mysqli_stmt_execute($temp2);
mysqli_stmt_store_result($temp2);
$stmt = "SELECT ecourse_code,eslotname,etype,edate FROM exam_schedule where ebranch='$temp2'";
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
?>

<!DOCTYPE html>
<html>
 <head>
 <title></title>
 </head>
<body>
<?php
if (mysqli_num_rows($stmt) > 0) {
?>
  <table>
  
  <tr>
    <td>Student Roll Number</td><br>
    <td>Student Name</td><br>
    <td>Year</td><br>
    <td>Branch</td><br>
    <td>Section</td><br>
    <td>Aadhar ID</td><br>
    <td>Student Age</td><br>
    <td>Student DOB</td><br>
    <td>Student Email</td><br>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($stmt)) {
?>
<tr>
    <td><?php echo $row["ecourse_code"]; ?></td><br>
    <td><?php echo $row["eslotname"]; ?></td><br>
    <td><?php echo $row["etype"]; ?></td><br>
    <td><?php echo $row["edata"]; ?></td><br>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>