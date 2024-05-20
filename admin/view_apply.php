<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>
</head>

<body>
<h1 align="center">View Apply</h1>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
<table class="table table-responsive">
<thead>
<th>Apply ID</th>
<th>Name</th>
<th>Course Name</th>
<th>H.S.L.C. percentage</th>
<th>H.S.L.C. total</th>
<th>H.S percentage</th>
<th>H.S total</th>

</thead>
<tbody>

<?php
include("connect.php");
$sql="select * from apply";
$rs=mysqli_query($con,$sql);
while($row=mysqli_fetch_row($rs))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "<td>$row[14]</td>";
echo "<td>$row[15]</td>";
echo "<td><a href='view_apply_details.php?a=$row[0]'>view details</a></td>"; 
echo "</tr>";
}
?>
</tbody>
</table>
</div>
<div class="col-sm-2">
</div>
</div>
</body>
</html>