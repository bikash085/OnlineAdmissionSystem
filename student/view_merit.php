<?php
error_reporting(0);
include("connect.php");
session_start();
$email=$_SESSION["semail"];
$sql3=mysqli_fetch_row(mysqli_query($con,"select * from apply where semail='$email'"));
$sql4=mysqli_fetch_row(mysqli_query($con,"select count(*) from meritlist where apply_id='$sql3[0]'"));
if($sql4[0]==1)

{
	echo "You are selected";
}
else

{
	echo "You are not selected";
}


?>