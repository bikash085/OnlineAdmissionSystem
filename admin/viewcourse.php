<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>View Course</title>

<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>

</head>

<body>

<h1 align="center"> Course Details</h1>
<div class="row">
<div class="col-sm-0">
</div>
<div class="col-sm-12">
<table class=" table table-responsive">
<thead>
<th>Course ID</th>
<th>Course </th>
<th>Programme</th>
<th>Total Seats</th>
<th>Open</th>
<th>OBC</th>
<th>SC</th>
<th>ST</th>
<th>Course Duration</th>
<th>Eligibility Criteria</th>
</thead>
<tbody>
<?php
include("connect.php");

$sql="select * from course_details";
$rs=mysqli_query($con,$sql);
while($row=mysqli_fetch_row($rs))

{
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "<td>$row[6]</td>";
	echo "<td>$row[7]</td>";
	echo "<td>$row[8]</td>";
	echo "<td>$row[9]</td>";
	echo "<td><a href='delete_course.php?a=$row[0] & b=$row[1]'>Delete</a></td>";
	echo "<td><a href='edit_course.php?a=$row[0] & b=$row[1] & c=$row[2] & d=$row[3] & e=$row[4] & f=$row[5] & g=$row[6] & h=$row[7] & i=$row[8] & j=$row[9]'>Edit</a></td>";
	echo "</tr>";
}
?>
</tbody>
</table>
</div>
<div class="col-sm-0">
</div>
</div>

</body>
</html>