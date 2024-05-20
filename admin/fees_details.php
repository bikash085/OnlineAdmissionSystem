<?php
include("connect.php");


$course_id=$_POST["courseid"];
$tution_fees=$_POST["tution_fees"];
$exam_fees=$_POST["exam_fees"];
$std_act=$_POST["std_activity"];
$spt_gym=$_POST["sports_gym"];
$reg_fees=$_POST["reg_fees"];
$med_ser=$_POST["medical_services"];
$lab_fac=$_POST["lab_faclities"];
$lib_inf=$_POST["lib_inf_services"];
$grp_ins=$_POST["ins_fees"];
$total=$_POST["total"];

$sql="insert into fees_details(course_id,tution_fees,examination_fees,student_activity,sports_gym,registration_fees,medical_services,lab,library_information,group_insurance_fees,total) values('$course_id','$tution_fees','$exam_fees','$std_act','$spt_gym','$reg_fees','$med_ser','$lab_fac','$lib_inf','$grp_ins','$total')";

$sql1=mysqli_query($con,$sql);

if($sql1==1)
{
	echo "<script type='text/javascript' language='javascript'>
	alert ('successfully inserted');
	</script>";
	header("Refresh:0;dashboard.php");
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert ('error');
	</script>";
	header("Refresh:0;dashboard.php");
}
?>