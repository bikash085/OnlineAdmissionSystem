
<?php
include("connect.php");

$email=$_POST["semail"];
$spassword=$_POST["password"];


$sql="select * from student_registration where semail='$email' and password='$spassword'";
$pass=mysqli_query($con,$sql);
$c=mysqli_num_rows($pass);
if($c>0)
{
	session_start();
	$_SESSION["semail"]=$email;
	echo "<script type='text/javascript' language='javascript'>
	alert('login successfull');
	</script>";
	 header("Refresh:0;dashboard.php");
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert('Error');
	</script>";
	header("Refresh:0;index.html");
}

?>