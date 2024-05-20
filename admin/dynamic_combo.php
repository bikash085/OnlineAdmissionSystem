<?php
$con=include("connect.php");
$sql=mysqli_query($con,"select * from course_id");
echo "<select name='courseid' id='courseid' class='form-control'>";
echo "<option>--SELECT--</option>";
while($row=mysqli_fetch_row($sql))
{
	
 echo "<option value=$row[0]>$row[1]</option>";
}

echo "</select>";
?>
