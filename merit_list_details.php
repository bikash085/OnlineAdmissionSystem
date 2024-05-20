<?php
include("connect.php");

$course_id=$_POST["courseid"];
$cut_off=$_POST["cutoff"];
$caste=$_POST["caste"];
$total=$_POST["total"];

$sql="select * from apply where course_id='$course_id' and hslc_per='$cut_off'";

$sql1=mysqli_query($con,$sql);


?>