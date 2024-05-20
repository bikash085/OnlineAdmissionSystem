<?php
session_start();

if(isset($_POST["button"]))
{
include("connect.php");
$semail=$_SESSION["semail"];


$name=$_POST["name"];
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$dob=$_POST["dob"];
$mno=$_POST["mno"];
$gender=$_POST["R1"];
$caste=$_POST["R3"];
$course=$_POST["courseid"];
$hslcper=$_POST["hslcper"];
$hslctot=$_POST["hslctotmak"];
$hslcsubs=$_POST["hslcsubs"];
$hslcboard=$_POST["hslcboard"];
$hsper=$_POST["hsper"];
$hstot=$_POST["hstotmak"];
$hssubs=$_POST["hssubs"];
$hsboard=$_POST["hsboard"];
$hslcmkst=$_FILES["hslcmkst"]["name"];

$hslccer=$_FILES["hslccer"]["name"];


$hsmkst=$_FILES["hsmkst"]["name"];

$hscer=$_FILES["hscer"]["name"];


$prc=$_FILES["prc"]["name"];


$castecer=$_FILES["castecer"]["name"];


$state=$_POST["state"];
$dis=$_POST["dis"];
$address=$_POST["address"];


$sq2=mysqli_query($con,"SELECT * FROM apply WHERE semail='$semail'");
	$c=mysqli_num_rows($sq2);
	$rs2=mysqli_fetch_row($sq2);
	if($c>0)
	{
		echo "<script type='text/javascript' language='javascript'>
	alert('ALREADY EXIST');
	</script>";
	header("Refresh:0;dashboard.php?a=0");
	}
	else
	{
		$sql="insert into apply(semail,name,fname,mname,dob,m_number,gender,caste,course_id,hslc_per,hslc_tot,hslc_subs,hslc_bd_cn,hs_per,hs_tot,hs_subs,hs_bd_cn,hslc_mkst,hslc_cer,hs_mkst,hs_cer,prc_cer,cast_cer,state,district,address) values('$semail','$name','$fname','$mname','$dob','$mno','$gender','$caste','$course','$hslcper','$hslctot','$hslcsubs','$hslcboard','$hsper','$hstot','$hssubs','$hsboard','$hslcmkst','$hslccer','$hsmkst','$hscer','$prc','$castecer','$state','$dis','$address')";

//echo $sql;
$rs=mysqli_query($con,$sql);

if($rs==1)
{
move_uploaded_file($_FILES["hslcmkst"]["tmp_name"],"upload/".$_FILES["hslcmkst"]["name"]);
move_uploaded_file($_FILES["hslccer"]["tmp_name"],"upload/".$_FILES["hslccer"]["name"]);
move_uploaded_file($_FILES["hsmkst"]["tmp_name"],"upload/".$_FILES["hsmkst"]["name"]);
move_uploaded_file($_FILES["hscer"]["tmp_name"],"upload/".$_FILES["hscer"]["name"]);
move_uploaded_file($_FILES["prc"]["tmp_name"],"upload/".$_FILES["prc"]["name"]);
move_uploaded_file($_FILES["castecer"]["tmp_name"],"upload/".$_FILES["castecer"]["name"]);
}


if($rs==1)
{
	echo "<script type='text/javascript' language='javascript'>
	alert('Application successfully submitted');
	</script>";
	 header("Refresh:0;dashboard.php?a=0");
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert('Error');
	</script>";
	header("Refresh:0;dashboard.php?a=0");
}

		
	}

	}


?>


