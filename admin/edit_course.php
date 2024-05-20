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


$course_id=$_GET["a"];
$course_name=$_GET["b"];
$prog=$_GET["c"];
$total=$_GET["d"];
$open=$_GET["e"];
$obc=$_GET["f"];
$sc=$_GET["g"];
$st=$_GET["h"];
$course_duration=$_GET["i"];
$criteria=$_GET["j"];
?>

<h1 align="center">Update Course Details</h1>
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-6">
<form name="f1" method="post" action="edit_coursescript.php">
  <table  border="0" align="center" class="table-striped">
 
    <tr>
      <td>Course ID</td>
      <td height="50"><input type="text" name="courseid" id="courseid" class="form-control" value="<?php echo $course_id; ?>" required="required"/></td>
    </tr>
  
    <tr>
      <td>Course </td>
      <td height="50"><input type="text" name="coursename" id="coursename" class="form-control" value="<?php echo $course_name; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>Programme</td>
      <td height="50"><input type="text" name="programme" id="programme"  class="form-control" value="<?php echo $prog; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>Total seats</td>
      <td height="50"><input type="text" name="total" id="total"  class="form-control" value="<?php echo $total; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>Open category</td>
      <td height="50"><input type="text" name="open" id="open"  class="form-control" value="<?php echo $open; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>OBC</td>
      <td height="50"><input type="text" name="obc" id="obc"  class="form-control" value="<?php echo $obc; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>SC</td>
      <td height="50"><input type="text" name="sc" id="sc"  class="form-control" value="<?php echo $sc; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>ST</td>
      <td height="50"><input type="text" name="st" id="st"  class="form-control" value="<?php echo $st; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>Course Duration</td>
      <td height="50"><input type="text" name="courseduration" id="courseduration" class="form-control" value="<?php echo $course_duration; ?>" required="required"/></td>
    </tr>
    <tr>
      <td>Eligibility Criteria</td>
      <td height="50"><input type="text" name="criteria" id="criteria"  class="form-control" value="<?php echo $criteria; ?>" required="required"/></td>
    </tr>
   
  </table>
  <center><input type="submit" name="button" id="button" value="Update" class="btn-success"/></center>
  
 </form> 
</div>
<div class="col-sm-3">
</div>
</div>

</body>
</html>