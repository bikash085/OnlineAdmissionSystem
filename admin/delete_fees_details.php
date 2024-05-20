<?php
include("connect.php");

$course_id=$_GET["a"];

$sql="delete from fees_details where course_id='$course_id'";

$sql1=mysqli_query($con,$sql);

if($sql1==1)
{
	echo "<script type='text/javascript' language='javascript'>
	alert ('Successfully deleted');
	</script>";
	header("Refresh:0;dashboard.php");
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert ('Error');
	</script>";
	header("Refresh:0;dashboard.php");
}
?>