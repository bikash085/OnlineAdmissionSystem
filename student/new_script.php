<?php
include("connect.php");
$applyid=$_POST["applyid"];



$roll=$_POST["roll"].$_POST["year"].$_POST["sl"];
$fees=$_POST["fees"];
$year=$_POST["y1"];
$cid=$_POST["h1"];
$bank=$_POST["t40"];
$ctype=$_POST["s33"];
$name=$_POST["t41"];
$eon=$_POST["t42"];
$cvv=$_POST["t43"];


$sql2=mysqli_fetch_row(mysqli_query($con,"select count(*) from admission where rollno='$roll'"));
echo "nor".$sql2[0];
echo $roll;
if($sql2[0]==0)
{

$sql="insert into admission(apply_id,rollno,fee,year,course_id,bank,cardtype,name,eon,cvv)values('$applyid','$roll','$fees','$year','$cid','$bank','$ctype','$name','$eon','$cvv')";
//echo $sql;

$sql1=mysqli_query($con,$sql);


if($sql1==1)

{
	echo "<script  type='text/javascript' language='javascript'>
	alert ('You have taken admission successfully');
	</script>";
	header("Refresh:0;home.php");
}
else
{
	echo "<script  type='text/javascript' language='javascript'>
	alert ('Error');
	</script>";
	header("Refresh:0;home.php");
}
}
else
{
	echo "<script  type='text/javascript' language='javascript'>
	alert ('This Roll number is already exist');
	</script>";
	header("Refresh:0;home.php");
}

?>