<div class="row">


<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">

<table width="600px">
<thead>
<th>Apply Id</th>
<th>Name</th>
<th>Course</th>
</thead>
<tbody>
<?php
include("connect.php");
session_start();
$email=$_SESSION["semail"];
$rs="select apply_id,course_id,name from apply where semail='$email'";
$rs78=mysqli_query($con,$rs);
$row88=mysqli_fetch_row($rs78);
	
	$sq2=mysqli_query($con,"SELECT * FROM `meritlist` WHERE apply_id='$row88[0]'");
	$c=mysqli_num_rows($sq2);
	$rs2=mysqli_fetch_row($sq2);
	if($c>0)
	{
		echo "<tr>";
	echo "<td>$rs2[1]</td>";
	echo "<td>$row88[2]</td>";
	$sq4=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM `course_details` WHERE course_id='$row88[1]'"));
	echo "<td>$sq4[1]</td>";
echo "<td><a href='dashboard.php?a=7&a1=$row88[1]&b1=$rs2[1]'>Admission</a></td>";
	echo "</tr>";	
	}
	else
	{
		echo "You have not selected";
	}
	
	
	

?>
</tbody>
</table>
</div>
<div class="col-sm-2"></div> 
</div>