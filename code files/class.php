<?php
include 'database.php';


   session_start();
   
   $temp1=$_SESSION["login"];
   $sqltemp = "SELECT branch FROM student where sroll='$temp1'";
   
   $branch="";
   $temp2 = $conn->query($sqltemp);
   if($temp2->num_rows>0){
       while($row =$temp2->fetch_row()){
           $branch=$row[0];
       }
   }

   $sqltemp1 = "SELECT section FROM student where sroll='$temp1'";
   
   $section="";
   $temp3 = $conn->query($sqltemp1);
   if($temp3->num_rows>0){
       while($row =$temp3->fetch_row()){
           $section=$row[0];
       }
   }
   
   $result = mysqli_query($conn,"SELECT class_no, block, capacity FROM class_detls where c_branch='$branch' and c_section='$section'");

   ?>
   <!DOCTYPE html>
   <html>
    <head>
    <style>
        body{
            background-color:  rgb(255, 251, 250);
        }
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
ul {
  background: rgb(255, 251, 250);
  padding: 20px;
}




</style>
    </head>
   <body>
   <?php
   if ($result->num_rows>0) {
   ?>
    
       
    
   <?php
   $i=0;
   while($row = $result->fetch_row()) {
   ?>
 
       <?php echo "<ul><li>Class Number: $row[0]</li><br><li>Block: $row[1]</li><br><li>Capacity of the Class: $row[2]</li></ul>"; ?>
       
   
   <?php
   $i++;
   }
   ?>

    <?php
   }
   else{
       echo "No result found";
   }
   ?>
    </body>
   </html>