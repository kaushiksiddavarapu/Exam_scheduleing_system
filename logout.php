<?php
session_start();
unset($_SESSION["LOGIN"]);

header("Location:slogin.php");
?>