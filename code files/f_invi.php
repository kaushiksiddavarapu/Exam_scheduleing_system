<?php
session_start();
include ("database.php");
$temp32 = $_SESSION["login"];
$result = mysqli_query($conn,"SELECT * FROM f_invi where fiid='$temp32'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title></title>
 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Faculty ID</td>
    <td>Faculty Class Room/Block</td>
    <td>Slot</td>
    <td>Exam Date</td>
    <td>Invigilating Branch</td>
    <td>Exam ID</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
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