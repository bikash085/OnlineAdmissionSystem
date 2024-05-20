
<?php
include("connect.php");

$uname=$_POST["uname"];
$password=$_POST["password"];


$sql="select * from admin_login where admin_id='$uname' and password='$password'";
$pass=mysqli_query($con,$sql);
$c=mysqli_num_rows($pass);
if($c>0)
{
	session_start();
	$_SESSION["uname"]=$uname;
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