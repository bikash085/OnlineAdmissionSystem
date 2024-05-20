<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>


<script type="text/javascript">
	function findTotal()
	{
    var arr = document.getElementsByClassName('qty');
    var tot=0;
    	for(var i=0;i<arr.length;i++)
    	{
        if(parseInt(arr[i].value))
        tot += parseInt(arr[i].value);
    	}
    document.getElementById('total').value = tot;
    document.getElementById('total1').value = tot;
	}
</script>

</head>

<body>
<?php
session_start();
$_SESSION["fid"]=$_GET["x"];
$course_id=$_GET["a"];
$tution_fees=$_GET["b"];
$exam_fees=$_GET["c"];
$std_act=$_GET["d"];
$spt_gym=$_GET["e"];
$reg_fees=$_GET["f"];
$med_ser=$_GET["g"];
$lab_fac=$_GET["h"];
$lib_inf=$_GET["i"];
$ins=$_GET["j"];
$total=$_GET["k"];
?>

<h1 align="center">Update Fees Details</h1>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
<form name="e1" method="post" action="edit_feesscript.php">
  <table align="center" border="0" class="table-striped">
    <tr>
      <td width="30">Sl No</td>
      <td width="187">Particulars</td>
      <td width="164">Amount (Rs.)</td>
    </tr>
    <tr>
      <td>1
     </td>
      <td>Course Name</td>
       <td><input type="text" name="cname"   required class="qty" onkeyup="findTotal()" value="<?php echo $course_id;?>"/></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Tution Fees</td>
      <td><input type="text" name="tution_fees"   required class="qty" onkeyup="findTotal()" value="<?php echo $tution_fees;?>"/></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Examination Fees</td>
      <td><input type="text" name="exam_fees"  required class="qty" onkeyup="findTotal()" value="<?php echo $exam_fees; ?>"/></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Student Activity</td>
      <td><input type="text" name="std_activity" required class="qty" onkeyup="findTotal()" value="<?php echo $std_act; ?>"/></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Sports/Gym</td>
      <td><input type="text" name="sports_gym" required class="qty" onkeyup="findTotal()" value="<?php echo $spt_gym; ?>"/></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Registration Fees</td>
      <td><input type="text" name="reg_fees" required class="qty" onkeyup="findTotal()" value="<?php echo $reg_fees; ?>"/></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Medical Services</td>
      <td><input type="text" name="medical_services" required class="qty" onkeyup="findTotal()" value="<?php echo $med_ser; ?>"/></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Lab Facilities</td>
      <td><input type="text" name="lab_faclities" required class="qty" onkeyup="findTotal()" value="<?php echo $lab_fac; ?>"/></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Library &amp; Informations</td>
      <td><input type="text" name="lib_inf_services" required class="qty" onkeyup="findTotal()" value="<?php echo $lib_inf; ?>"/></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Insurance Fees</td>
      <td><input type="text" name="ins_fees" required class="qty" onkeyup="findTotal()" value="<?php echo $ins; ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Total Amount</td>
      <td><input type="number"  id="total" enable value="<?php echo $total; ?>"></td>
      <input type="number" name="total" id="total1" hidden >
    </tr>
  </table>
  
    <center><input type="submit" name="Submit" id="button" value="Update" class="btn-success"/></center>

  </form>
</div>
<div class="col-sm-2">
</div>
</div>
</body>
</html>