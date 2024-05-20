<?php 
include("connect.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apply Table</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>



<script type="text/javascript" language="javascript">


function loaddata()
{
	var state=document.getElementById("state").value;
	//alert(did);
	
	 if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
     //alert(xmlhttp.responseText);
    document.getElementById("dis").innerHTML=xmlhttp.responseText;    
	//document.getElementById("empid").value="";
    }
  }
 
 
 
 var url="selectdis.php"+"?sid="+state;
 //var url="selectdis.php"+"?sid="+state+"&cid="+cid;
 //alert(url);
 xmlhttp.open("GET",url,true);
 xmlhttp.send();  
	
	
}


</script>


</head>

<body>
<h1 align="center">Apply</h1>
<div class="row">
<div class="col-sm-2" >
</div>
<div class="col-sm-8" >
<form name="a1" id="a1" method="post" action="applyscript.php" enctype="multipart/form-data">
  <table border="0" align="center" class="table-striped">
    <tr>
      <td >Name</td>
      <td  height="50"><input type="text" name="name" id="name" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>Father's Name</td>
      <td  height="50"><input type="text" name="fname" id="fname" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>Mother's Name</td>
      <td  height="50"><input type="text" name="mname" id="mname" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td  height="50"><input type="date" name="dob" id="dob" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>Mobile Number</td>
      <td  height="50"><input type="number" name="mno" id="mno" class="form-control" required="required" maxlength="10"/></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td  height="50">
        <label>
          <input type="radio" name="R1" value="Male" id="R0" class="form-control" required="required"/>
          Male
          &nbsp;&nbsp;
          <input type="radio" name="R1" value="Female" id="R1" class="form-control" required="required"/>
          Female</label></td>
    </tr>
    <tr>
      <td>Caste</td>
          <td><label>
            <input type="radio" name="R3" value="General" id="R30" class="form-control" required="required" />General
            <input type="radio" name="R3" value="OBC" id="R31" class="form-control" required="required" />OBC
          <input type="radio" name="R3" value="SC" id="R32" class="form-control" required="required" />SC
          <input type="radio" name="R3" value="ST" id="R33" class="form-control" required="required" />ST</label></td>
        </tr>
    <tr>
      <td width="200">Apply Course</td>
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
      <td>H.S.L.C percentage</td>
      <td  height="50"><input type="text" name="hslcper" id="hslcper" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>H.S.L.C total marks</td>
      <td  height="50"><input type="text" name="hslctotmak" id="hslctotmak"  class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>H.S.L.C. subjects</td>
      <td  height="50"><textarea name="hslcsubs" id="hslcsubs" cols="25" rows="3" class="form-control" required="required"></textarea></td>
    </tr>
    <tr>
      <td>H.S.L.C Board/Council</td>
      <td  height="50"><input type="text" name="hslcboard" id="hslcboard" class="form-control" required="required"></textarea></td>
    </tr>
    </tr>
    <tr>
      <td>H.S. percentage</td>
      <td  height="50"><input type="text" name="hsper" id="hsper" class="form-control"/></td>
    </tr>
    <tr>
      <td>H.S. total marks</td>
      <td  height="50"><input type="text" name="hstotmak" id="hstotmak"  class="form-control"/></td>
    </tr>
    <tr>
      <td>H.S. subjects</td>
      <td  height="50"><textarea name="hssubs" id="hssubs" cols="25" rows="3"  class="form-control"></textarea></td>
    </tr>
    <tr>
      <td>H.S. Board/Council</td>
      <td  height="50"><input type="text" name="hsboard" id="hsboard" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td>H.S.L.C Marksheet</td>
      <td  height="50"><input type="file" name="hslcmkst" id="hslcmkst" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>H.S.L.C Certificate</td>
      <td  height="50"><input type="file" name="hslccer" id="hslccer"  class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>H.S. Marksheet</td>
      <td  height="50"><input type="file" name="hsmkst" id="hsmkst"  class="form-control"/></td>
    </tr>
    <tr>
      <td>H.S. Certificate</td>
      <td  height="50"><input type="file" name="hscer" id="hscer"  class="form-control"/></td>
    </tr>
    <tr>
      <td>Parmanent Resident Certificate</td>
      <td  height="50"><input type="file" name="prc" id="prc" class="form-control" required="required"/></td>
    </tr>
    <tr>
      <td>Caste Certificate</td>
      <td  height="50"><input type="file" name="castecer" id="castecer"  class="form-control"/></td>
    </tr>
    
    <?php
	include("connect.php");
	$sql=mysqli_query($con,"select * from state");
	//echo "number of rows".mysqli_num_rows($sql);
	
	?>
    <tr>
      <td>State</td>
      <td  height="50"><select name="state" id="state" onchange="loaddata()">
      <option>Select State </option>
      <?php
	  while($rs=mysqli_fetch_row($sql))
	  {
		  echo "<option value='$rs[0]'>$rs[1]</option>";
	  }
	  
	  ?>
      </select>
    </tr>
    <tr>
      <td height="67">District</td>
      <td><select name="dis" id="dis" required="required"></select></td>
    </tr>
    <tr>
      <td height="67">Address</td>
      <td><textarea name="address" id="address" cols="25" rows="3" class="form-control" required="required"></textarea></td>
    </tr>
    </table>
  .
    <center><input type="submit" name="button" id="button" value="Submit" class="btn-success"/></center>
    </form>
</div>
<div class="col-sm-2 ">
</div>
</div>
</body>
</html>
