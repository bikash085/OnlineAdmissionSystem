<?php
include("connect.php");
$sid=$_GET["sid"];
$sql1="select * from district where sid='$sid'";
//echo $sql1;
$sql=mysqli_query($con,$sql1);
//echo "nor".mysqli_num_rows($sql);
echo "<select name='dis' id='dis' class='form-control'>";
while($rs=mysqli_fetch_row($sql))
{
	echo "<option value='$rs[0]'>$rs[1]</option>";
}

echo "</select>";

?>