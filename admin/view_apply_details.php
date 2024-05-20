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
$apply_id=$_GET["a"];
$sql="select * from apply where apply_id='$apply_id'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_row($rs);


?>
<h1 align="center">View Apply Details</h1>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
 <table border="0" align="center" class="table-striped">
    <tr>
      <td >Apply ID</td>
      <td  height="50"><input type="text" name="textfield" id="textfield" class="form-control" value="<?php echo $row[0] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Student Email</td>
      <td  height="50"><input type="text" name="textfield2" id="textfield2"  class="form-control" value="<?php echo $row[1] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Name</td>
      <td  height="50"><input type="text" name="textfield3" id="textfield3" class="form-control" value="<?php echo $row[2] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Father's Name</td>
      <td  height="50"><input type="text" name="textfield4" id="textfield4"  class="form-control" value="<?php echo $row[3] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Mother's Name</td>
      <td  height="50"><input type="text" name="textfield5" id="textfield5"  class="form-control" value="<?php echo $row[4] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Date of Birth</td>
      <td  height="50"><input type="text" name="textfield6" id="textfield6"  class="form-control" value="<?php echo $row[5] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Mobile Number</td>
      <td  height="50"><input type="text" name="textfield7" id="textfield7"  class="form-control" value="<?php echo $row[6] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Gender</td>
      <td  height="50"><input type="text" name="textfield8" id="textfield8"  class="form-control" value="<?php echo $row[7] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Caste</td>
      <td  height="50"><input type="text" name="textfield9" id="textfield9"  class="form-control" value="<?php echo $row[8] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Course Name</td>
      <td  height="50"><input type="text" name="textfield10" id="textfield10"  class="form-control" value="<?php echo $row[9] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S.L.C. Percentage</td>
      <td  height="50"><input type="text" name="textfield11" id="textfield11"  class="form-control" value="<?php echo $row[10] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S.L.C. Total Marks</td>
      <td  height="50"><input type="text" name="textfield12" id="textfield12"  class="form-control" value="<?php echo $row[11] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S.L.C. Subjects</td>
      <td  height="50"><input type="text" name="textfield17" id="textfield17" class="form-control" value="<?php echo $row[12] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S.L.C. Board/Council</td>
      <td  height="50"><input type="text" name="textfield13" id="textfield13" class="form-control" value="<?php echo $row[13] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S. Percentage</td>
      <td  height="50"><input type="text" name="textfield14" id="textfield14"  class="form-control" value="<?php echo $row[14] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S. Total</td>
      <td  height="50"><input type="text" name="textfield15" id="textfield15"  class="form-control" value="<?php echo $row[15] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S. Subjects</td>
      <td  height="50"><input type="text" name="textfield18" id="textfield18"  class="form-control" value="<?php echo $row[16] ?>"readonly="readonly"/></td>
    </tr>
    <tr>
      <td >H.S. Board/Council</td>
      <td  height="50"><input type="text" name="textfield16" id="textfield16"  class="form-control" value="<?php echo $row[17] ?>" readonly="readonly"/></td>
    </tr>

    <tr>
      <td >State</td>
      <td  height="50"><input type="text" name="textfield26" id="textfield26" class="form-control" value="<?php echo $row[24] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >District</td>
      <td  height="50"><input type="text" name="textfield27" id="textfield27" class="form-control" value="<?php echo $row[25] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td >Address</td>
      <td  height="50"><input type="text" name="textfield28" id="textfield28" class="form-control" value="<?php echo $row[26] ?>" readonly="readonly"/></td>
    </tr>
    </table>
    <p>H.S.L.C Marksheet</p>
<?php
//echo "marks list".$rs[18];
    echo "<img src='../student/upload/$row[18]' width='102' height='100'/>";

?>
<p>H.S.L.C. Certificate</p>
<?php
echo "<img src='../student/upload/$row[19]' width='102' height='100'/>";
?>
<p>H.S. Marksheet</p>
<?php
echo "<img src='../student/upload/$row[20]' width='102' height='100'/>";
?> 
<p>H.S. Certificate</p>
<?php 
echo "<img src='../student/upload/$row[21]' width='102' height='100'/>";
?>
<p>Parmanent Resident Certificate</p>
<?php
echo "<img src='../student/upload/$row[22]' width='102' height='100'/>";
?>
<p>Caste Certificate</p>
<?php
echo "<img src='../student/upload/$row[23]' width='102' height='100'/>";
?>

</div>
<div class="col-sm-2">
</div>
</div>

</body>
</html>