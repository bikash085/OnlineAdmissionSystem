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
<?php
include("connect.php");
$course_id=$_GET["a"];
$sql="select * from fees_details where course_id='$course_id'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_row($rs);


?>
<h1 align="center">View Fees Details</h1>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
 <table border="0" align="center" class="table-striped">
    <tr>
      <td >Fees ID</td>
      <td  height="50"><input type="text" name="textfield" id="textfield" class="form-control" value="<?php echo $row[0] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Course ID</td>
      <td  height="50"><input type="text" name="textfield2" id="textfield2"  class="form-control" value="<?php echo $row[1] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Tution Fees</td>
      <td  height="50"><input type="text" name="textfield3" id="textfield3" class="form-control" value="<?php echo $row[2] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Examination Fees</td>
      <td  height="50"><input type="text" name="textfield4" id="textfield4"  class="form-control" value="<?php echo $row[3] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Student Activity</td>
      <td  height="50"><input type="text" name="textfield5" id="textfield5"  class="form-control" value="<?php echo $row[4] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Sports/GYM</td>
      <td  height="50"><input type="text" name="textfield6" id="textfield6"  class="form-control" value="<?php echo $row[5] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Registration Fees</td>
      <td  height="50"><input type="text" name="textfield7" id="textfield7"  class="form-control" value="<?php echo $row[6] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Medical Services</td>
      <td  height="50"><input type="text" name="textfield8" id="textfield8"  class="form-control" value="<?php echo $row[7] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Lab</td>
      <td  height="50"><input type="text" name="textfield9" id="textfield9"  class="form-control" value="<?php echo $row[8] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Library Information</td>
      <td  height="50"><input type="text" name="textfield10" id="textfield10"  class="form-control" value="<?php echo $row[9] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Group Insurence Fees</td>
      <td  height="50"><input type="text" name="textfield11" id="textfield11"  class="form-control" value="<?php echo $row[10] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Total</td>
      <td  height="50"><input type="text" name="textfield12" id="textfield12"  class="form-control" value="<?php echo $row[11] ?>" readonly="readonly"/></td>
    </tr>
   

</div>
<div class="col-sm-2">
</div>
</div>

</body>
</html>