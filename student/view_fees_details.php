<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>

</head>

<body>
<h1 align="center">Fees Details</h1>
<div class="row">
<div class="col-sm-0">
</div>
<div class="col-sm-12">
<table class="table table-responsive">
<thead>
<th>Fees ID</th>
<th>Course ID</th>
<th>Tution Fees</th>
<th>Exam Fees</th>
<th>Std Act</th>
<th>Sports Gym</th>
<th>Reg Fees</th>
<th>Med Ser</th>
<th>Lab</th>
<th>Lib & Inf</th>
<th>Ins</th>
<th>Total</th>
</thead>
<tbody>
<?php
include("connect.php");

$sql="select * from fees_details";
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
	echo "<td>$row[10]</td>";
	echo "<td>$row[11]</td>";
	
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