<?php
error_reporting(E_ALL ^ E_NOTICE);
include("database.php");
extract($_POST);
$user_id=$_POST["sroll"];
$pass=$_POST["spassword"];
if(isset($submit))
{
	$rs=mysqli_query($conn,"SELECT * from student where sroll='$user_id' and spassword='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		session_start();
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
header("Location:student.php");
exit;
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
        ::-webkit-scrollbar {
          width: 7px;
        }
        ::-webkit-scrollbar-track {
            background:rgb(255, 255, 255); 
          }
           
          
          ::-webkit-scrollbar-thumb {
            background: rgba(214, 214, 214, 0.712); 
          }
          
          
          ::-webkit-scrollbar-thumb:hover {
            background:rgb(255, 255, 255); 
        </style>
<style>
body {font-family:monospace;
       background-color: rgb(255, 255, 255);}

body {font-family:monospace;
       background-color: rgb(236, 236, 236);}

form {
  border: 3px solid rgb(236, 236, 236);
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color:white;
}
p
{ padding: 0 0 16px 0;
  line-height: 1.7em;
  color: rgb(0, 0, 0);}

input[type=text], input[type=submit], input[type=email]{
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid rgba(204, 204, 204, 0);
  box-sizing: border-box;
}
input[type=password], input[type=submit], input[type=email]{
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid rgba(204, 204, 204, 0);
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: rgb(252, 113, 71);
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
</style>
</head>
<body>
<center>
<div class="floating-box">

<form name="form1" method="post">


   <label for="uname">User Name</label>
   <input type="text" placeholder="user name" id="loginid2" name="sroll"><br><br>

   <label for="pwd">Password</label>
   <input type="password" placeholder="password" id="pass2" name="spassword"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="subs.html">Register Here</a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="slogin.php">Please try again</p>';
		  }
		  ?>
 </center>
</form>

</div>
<center>
</body>
</html>