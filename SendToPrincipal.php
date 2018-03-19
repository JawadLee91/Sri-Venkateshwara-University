<?php
include("Connection/Connect.php");
$p_file = $_GET['file'];
$p_desc = $_GET['desc'];
$p_firstname = $_GET['fname'];
$p_lastname = $_GET['lname'];
$p_regno = $_GET['regno'];
$p_mobile = $_GET['mobile'];
$p_email = $_GET['email'];
$p_username = $_GET['username'];
$p_dob = $_GET['dob'];
$p_time = $_GET['time'];

$Send = "INSERT into `principal_received_data`(file_name,file_desc,first_name,last_name,reg_no,mobile,email,username,dob,time,status) values('$p_file','$p_desc','$p_firstname','$p_lastname','$p_regno','$p_mobile','$p_email','$p_username','$p_dob','$p_time','0')";
$QuerySend = mysqli_query($conn,$Send);
if($QuerySend)
{
	$update = "UPDATE `hod_received_data` SET send_principal = '1' where received_file='$p_file' and received_description='$p_desc' ";
	$QueryUpdate = mysqli_query($conn,$update);
	if($QueryUpdate)
	{
		echo "Sent Successfully";
		header("refresh:1;url=HOD_Login.php");
	}
	else
	{
		echo "<h1>Error in sending the Data to Principal</h1>";
	}
}
?>