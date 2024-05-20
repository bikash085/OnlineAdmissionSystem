<?php
include("connect.php");

$course_id=$_POST["courseid"];
$course=$_POST["coursename"];
$prog=$_POST["programme"];
$total=$_POST["total"];
$open=$_POST["open"];
$obc=$_POST["obc"];
$sc=$_POST["sc"];
$st=$_POST["st"];
$course_duration=$_POST["courseduration"];
$criteria=$_POST["criteria"];

$sql="update course_details set course_name='$course',programme='$prog',total='$total',open='$open',obc='$obc',sc='$sc',st='$st',course_duration='$course_duration',e_criteria='$criteria' where course_id='$course_id'";

$sql1=mysqli_query($con,$sql);

if($sql1==1)
{
	echo "<script  type='text/javascript' language='javascript'>
	alert ('successfully updated');
	</script>";
	header("Refresh:0;dashboard.php");
}
else
{
	echo "<script type='text/ecmascript' language='javascript'>
	alert('error');
	</script>";
	header("Refresh:0;dashboard.php");
}
?>