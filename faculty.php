<?php
session_start();
include ("database.php");
$temp = $_SESSION["login"];
$result = mysqli_query($conn,"SELECT fid,fname,fbranch,faadhar_id,fage,fdob FROM faculty where fid='$temp'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title></title>
 <style>
.button {
  background-color: rgb(252, 113, 71);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button1 {width: 100%;}

.buttona {
  background-color: rgb(252, 71, 71);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button2 {width: 50%;}



</style>
<style>
    #hell{
        border-left: 6px solid rgb(252, 113, 71);
        background-color: rgb(255, 251, 250);
    }
</style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
  ?>
      <h3 id="hell" style="colour=black">Faculty ID: <?php echo "$row[0]" ?></h3>
      <h3 id="hell" style="colour=black">Faculty Name: <?php echo "$row[1]" ?></h3>
      <h3 id="hell" style="colour=black">Branch: <?php echo "$row[2]" ?></h3>
      <h3 id="hell" style="colour=black">Aadhar ID: <?php echo "$row[3]" ?></h3>
      <h3 id="hell" style="colour=black">Age: <?php echo "$row[4]" ?></h3>
      <h3 id="hell" style="colour=black">DOB: <?php echo "$row[5]" ?></h3>
  
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

<form action="f_invi.php" >
    <button class="button button1" >Invigilation Schedule</button>
</form>
<form action="logoutf.php" >
    <button class="buttona button2"  >LOGOUT</button>
</form>
 </body>
</html>