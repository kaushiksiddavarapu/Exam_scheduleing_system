
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
   
   $result = mysqli_query($conn,"SELECT ecourse_code, eslotname, etype, edate FROM exam_schedule where ebranch='$branch'");

   ?>
   <!DOCTYPE html>
   <html>
    <head>
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
   if ($result->num_rows>0) {
   ?>
     <table>
     
     <tr>
       <td>course code</td>
       <td>slot</td>
       <td>type</td>
       <td>date</td>
       
     </tr>
   <?php
   $i=0;
   while($row = $result->fetch_row()) {
   ?>
   <tr>
       <td><?php echo $row[0]; ?></td>
       <td><?php echo $row[1]; ?></td>
       <td><?php echo $row[2]; ?></td>
       <td><?php echo $row[3]; ?></td>
       
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