<div class="row">

<div class="col-sm-2"></div>
<div class="col-sm-8">
<form name="f1" id="f1" method="post" action="home.php?a=6">
<table>
<tr>
<?php
echo "<td>Course</td>";
echo "<td width='10'></td>";
include("connect.php");
$sql=mysqli_query($con,"select * from course_details");
echo "<td><select name='s1' id='s1'>";
while($rs=mysqli_fetch_row($sql))
{
echo "<option value='$rs[0]'>$rs[1]</option>";
}
echo "</select></td>";

?>
<td width="10"></td>
<td><input type="submit" name="b1" id="b1"/></td>
</tr>
</table>
</form>
</div>
<div class="col-sm-2"></div>
</div>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<?php
if(isset($_POST["b1"]))
{
?>
<table width="600px">
<thead>
<th>Apply Id</th>
<th>Name</th>
<th>Course</th>
</thead>
<tbody>
<?php

	$cid=$_POST["s1"];
	$sq2=mysqli_query($con,"SELECT * FROM `meritlist` WHERE apply_id in(SELECT apply_id from apply where course_id='$cid')");
	while($rs2=mysqli_fetch_row($sq2))
	{
		$sq3=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM `apply` WHERE apply_id='$rs2[1]'"));
	echo "<tr>";
	echo "<td>$rs2[1]</td>";
	echo "<td>$sq3[2]</td>";
	$sq4=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM `course_details` WHERE course_id='$sq3[9]'"));
	echo "<td>$sq4[1]</td>";
	echo "<td><a href='home.php?a=7&a1=$cid&b1=$rs2[1]'>Admission</a></td>";
	echo "</tr>";	
	}
}
?>
</tbody>
</table>
</div>
<div class="col-sm-2"></div> 
</div>