<?php
include("connect.php");
$applyid=$_POST["applyid"];



$roll=$_POST["roll"].$_POST["sl"].$_POST["year"];
$fees=$_POST["fees"];
$d1=$_POST["d1"];
$year=$_POST["y1"];


$sql2=mysqli_fetch_row(mysqli_query($con,"select count(*) from admission where rollno='$roll'"));
echo "nor".$sql2[0];
if($sql2[0]==0)
{

$sql="insert into admission(apply_id,rollno,fee,dateofadmission,year)values('$applyid','$roll','$fees','$d1','$year')";
//echo $sql;

$sql1=mysqli_query($con,$sql);


if($sql1==1)

{
	echo "<script  type='text/javascript' language='javascript'>
	alert ('Inserted sucessfully');
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