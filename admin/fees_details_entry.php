<?php
include("connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>


<script type="text/javascript">
	function findTotal()
	{
    var arr = document.getElementsByClassName('qty');
    var tot=0;
    	for(var i=0;i<arr.length;i++)
    	{
        if(parseFloat(arr[i].value))
        tot += parseFloat(arr[i].value);
    	}
    document.getElementById('total').value = tot;
    document.getElementById('total1').value = tot;
	}
</script>


</head>

<body on onload="findTotal">
<h1 align="center">Enter Fees Details</h1>
<div class="row">
<div class="col-sm-0">
</div>
<div class="col-sm-12">

<form name="s1" id="s1" method="post" action="fees_details.php">
  <table border="0" align="center" class="table-striped">
    <tr>
      <td>Sl No</td>
      <td>Particulars</td>
      <td>Amount (Rs.)</td>
    </tr>
    <tr>
      <td width="31">1.</td>
      <td width="200">Course Name</td>
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
      <td>3.</td>
      <td>Tution Fees</td>
      <td><input type="text" name="tution_fees"  required class="qty" onkeyup="findTotal()" class="form-control" required="required" placeholder="Enter Tution Fees"></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Examination Fees</td>
      <td><input type="text" name="exam_fees"  required class="qty" onkeyup="findTotal()" class="form-control" required="required" placeholder="Enter Examination Fees"></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Student Activity</td>
      <td><input type="text" name="std_activity" required class="qty" onkeyup="findTotal()" class="form-control"  required="required" placeholder="Enter Examination Fees"></td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Sports/Gym</td>
      <td><input type="text" name="sports_gym" required class="qty" onkeyup="findTotal()" class="form-control"  required="required" placeholder="Enter Sports/GYM Fees"></td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Registration Fees</td>
      <td><input type="text" name="reg_fees" required class="qty" onkeyup="findTotal()" class="form-control"  required="required" placeholder="Enter Regristration  Fees"></td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Medical Services</td>
      <td><input type="text" name="medical_services" required class="qty" onkeyup="findTotal()" class="form-control"  required="required" placeholder="Enter Medical Services Fees"></td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Lab Facilities</td>
      <td><input type="text" name="lab_faclities" required class="qty" onkeyup="findTotal()" class="form-control"  required="required" placeholder="Enter Lab Facilities Fees"></td>
    </tr>
    <tr>
      <td>9.</td>
      <td>Library &amp; Information Services</td>
      <td><input type="text" name="lib_inf_services" required class="qty" onkeyup="findTotal()" class="form-control"  required="required" placeholder="Enter Library & Information Services Fees"></td>
    </tr>
    <tr>
      <td>10.</td>
      <td>Insurance Fees</td>
      <td><input type="text" name="ins_fees" required class="qty" onkeyup="findTotal()" class="form-control"  required="required" placeholder="Enter Insurance Fees"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Total Amount</td>
      <td><input type="text"  id="total" disabled ></td>
						<input type="text" name="total" id="total1" hidden >
    </tr>
  </table>
  <center>
   <center><input type="submit" name="button" id="button" value="Submit" class="btn-success"/></center>
  </center>
  </form>
</div>
<div class="col-sm-0">
</div>
</body>
</html>