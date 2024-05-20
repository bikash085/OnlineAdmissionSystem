<?php
include("connect.php");
session_start();
$dd=$_SESSION["fid"];

$tution_fees=trim($_POST["tution_fees"]);
$exam_fees=trim($_POST["exam_fees"]);
$std_act=trim($_POST["std_activity"]);
$spt_gym=trim($_POST["sports_gym"]);
$reg_fees=trim($_POST["reg_fees"]);
$med_ser=trim($_POST["medical_services"]);
$lab_fac=trim($_POST["lab_faclities"]);
$lib_inf=trim($_POST["lib_inf_services"]);
$ins=trim($_POST["ins_fees"]);
$total=trim($_POST["total"]);

$sql="update fees_details set tution_fees='$tution_fees', examination_fees='$exam_fees', student_activity='$std_act',sports_gym='$spt_gym', registration_fees='$reg_fees',medical_services='$med_ser',lab='$lab_fac', library_information='$lib_inf',group_insurance_fees='$ins',total='$total' where fees_id='$dd'";



$sql1=mysqli_query($con,$sql);

if($sql1==1)
{
	echo "<script  type='text/javascript' language='javascript'>
	alert ('successfully updated');
	</script>";
	header("Refresh:0;dashboard.php");
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert('error');
	</script>";
	header("Refresh:0;dashboard.php");
}
?>