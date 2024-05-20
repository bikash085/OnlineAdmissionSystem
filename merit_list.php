<?php
include("connect.php");
?>
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
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
<form name="m1" id="m1" method="post" action="home.php?a=5">
  <table border="0" align="center" class="table-striped">
    <tr>
      <td width="255" height="58">Course</td>
      <td width="148"><?php $sql=mysqli_query($con,"select * from course_details");
echo "<select name='courseid' id='courseid' class='form-control'>";
echo "<option>--SELECT--</option>";
      while($row=mysqli_fetch_row($sql))
{
	
 echo "<option value=$row[0]>$row[1]</option>";
}

echo "</select>";
	  ?></td>
    </tr>
    <tr>
      <td height="44">Cut Off</td>
      <td><input type="text" name="cutoff" id="cutoff" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td height="44">caste</td>
      <td><select name="r1" size="1" id="r1" class="form-control">
        <option value="General">General</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </select></td>
    </tr>
    <tr>
      <td height="48">Total No</td>
      <td><input type="text" name="total" id="total" class="form-control" required="required"/></td>
    </tr>
    
  </table>
 <center> <input type="submit" name="button" id="button" value="Merit List"/></center>
 </form>
</div>
<div class="col-sm-2">
</div>
</div>



<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<table class="table-striped" width="600px">
<thead>
<th>Name</th>
<th>Email</th>
</thead>
<tbody>
<?php
if(isset($_POST["button"]))
{
include("connect.php");

$course_id=$_POST["courseid"];
$cut_off=$_POST["cutoff"];
$caste=$_POST["r1"];
$total=$_POST["total"];

$csid=$course_id[0].$course_id[1];

if($csid=='HS')
{


$s="select * from apply where course_id='$course_id' and hslc_per>='$cut_off' and caste='$caste' order by hslc_per desc limit $total";

}
else
{
	
	$s="select * from apply where course_id='$course_id' and hs_per>='$cut_off' and caste='$caste' order by hs_per desc limit $total";
	
}
$s1=mysqli_query($con,$s);
$nor=mysqli_num_rows($s1);
if($nor<>0)
{
while($rs=mysqli_fetch_row($s1))
{
	echo "<tr>";
	echo "<td>$rs[2]</td>";
	echo "<td>$rs[1]</td>";
	echo "</tr>";
	$q="select count(*)from meritlist where apply_id='$rs[0]'";
	//echo $q;
	$sql4=mysqli_fetch_row(mysqli_query($con,$q));
	//echo "nor".$sql4[0];
	if($sql4[0]==0)
	{
		$q1="insert into meritlist(apply_id)values('$rs[0]')";
		//echo $q1;
	$sql3=mysqli_query($con,$q1);
	}
}

}
else
{
  echo "No Data Found";	
}
}
?>
</tbody>
</table>
</div>
<div class="col-sm-2"></div>

</div>
</body>
</html>