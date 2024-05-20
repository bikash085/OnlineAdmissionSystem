<?php
include("connect.php");
$course_id=$_GET["a"];
$course_name=$_GET["b"];

$sql="delete from course_details where course_id='$course_id' and course_name='$course_name'";
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
	alert ('error');
	</script>";
	header("Refresh:0;dashboard.php");
}
	

?>
