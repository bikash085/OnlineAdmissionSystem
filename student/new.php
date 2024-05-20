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
<?php
include("connect.php");
$cid=$_GET["a1"];
$applyid=$_GET["b1"];
$sql99="select * from admission where course_id='$cid'";
$rs99=mysqli_query($con,$sql99);
$cm=mysqli_num_rows($rs99);
if($cm>0)
{
	$idi=$cm+1;
}
else
{
	$idi=1;
}
?>
<?php
$sql6=mysqli_fetch_row(mysqli_query($con,"select count(*) from admission where apply_id='$applyid'"));

if($sql6[0]==0)
{
$sql2=mysqli_fetch_row(mysqli_query($con,"select * from fees_details where course_id='$cid'"));
?>

<form name="f1" id="f1" method="post" action="new_script.php">
  <table border="0" align="center" class="table-striped">
    <tr>
      <td>Application Id</td>
      <td><input type="text" name="applyid" id="textfield" class="form-control" value="<?php echo $applyid;?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td>Roll No</td>
      <td>
      <input type="text" name="roll" id="textfield" class="form-control" value="<?php echo $cid."/";?>" readonly="readonly"/></td>
      <input name="h1" type="hidden" value="<?php echo $cid;?>" />
      
     <?php
		  $d=date("Y");
		  ?>
          <td><input type="text" name="year" id="textfield" class="form-control" value="<?php echo $d."/";?>" readonly="readonly"/></td>
          <td><input type="text" name="sl" id="textfield" class="form-control" value="<?php echo $idi;?>" readonly="readonly"/></td>
          
      
    </tr>
    <tr>
      <td>Fees</td>
      <td><input type="text" name="fees" id="textfield2" class="form-control" value="<?php echo $sql2[11];?>" readonly="readonly"/></td>
    </tr>
    
    <tr>
      <td>year</td>
      <td><input type="text" name="y1" id="y1" class="form-control" value="<?php echo $d;?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>BANK</td>
      <td><input type="text" name="t40" id="t40" class="form-control" value=""  /></td>
      <td>CARD TYPE</td>
      <td><select name="s33" size="1" class="form-control">
        <option value="DEBIT">DEBIT</option>
        <option value="CREDIT">CREDIT</option>
      </select></td>
    </tr>
     <tr>
      <td>NAME</td>
      <td><input type="text" name="t41" id="t41" class="form-control" value=""  /></td>
      <td>EXPIRE ON</td>
      <td><input type="text" name="t42" id="t42" class="form-control" value=""  /></td>
    </tr>
     <tr>
      <td>CVV</td>
      <td><input type="text" name="t43" id="t43" class="form-control" value=""  /></td>
      
    </tr>
  </table>
  <center>
  <input type="submit" name="button" id="button" value="Save" class="btn-success"/>
  </center>
  </form>

</div>
</body>
</html>
<?php
}
else
{
	echo "<script  type='text/javascript' language='javascript'>
	alert ('This application id already took admission');
	</script>";
	error_reporting(0);
	header("Refresh:0;dashboard.php?a=6");
}
?>