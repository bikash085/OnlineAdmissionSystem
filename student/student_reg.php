<?php
include("connect.php");


$email=$_POST["studentemail"];
$password=$_POST["password"];

$sql="insert into student_registration(semail,password) values('$email','$password')";
$sql1=mysqli_query($con,$sql);

if($sql1==1)
{
	echo "<script type='text/javascript' language='javascript'>
	alert('successfully registered');
	</script>";
	header("Refresh:0;index.html");
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert('Error');
	</script>";
	header("Refresh:0;student_reg.html");
}

?>