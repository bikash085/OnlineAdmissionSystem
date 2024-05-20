<?php

include("connect.php");

$course_id=$_POST["courseid"];
$course=$_POST["coursename"];
$prog=$_POST["programme"];
$total=$_POST["tseats"];
$open=$_POST["open"];
$obc=$_POST["obc"];
$sc=$_POST["sc"];
$st=$_POST["st"];
$course_duration=$_POST["courseduration"];
$criteria=$_POST["criteria"];

$sql="insert into course_details(course_id,course_name,programme,total,open,obc,sc,st,course_duration,e_criteria) values('$course_id','$course','$prog','$total','$open','$obc','$sc','$st','$course_duration','$criteria')";



$sql1=mysqli_query($con,$sql);

if($sql1==1)
{
	echo "<script type='text/javascript' language='javascript'>
	alert (' Course successfully inserted');
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