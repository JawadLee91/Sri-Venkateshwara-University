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

	$update = "UPDATE `principal_received_data` SET status = '1' where file_name='$p_file' and file_desc='$p_desc' ";
	$QueryUpdate = mysqli_query($conn,$update);
	if($QueryUpdate)
	{
		$update_status = "update `hod_received_data` set approved='Approved' where received_file='$p_file' and received_description='$p_desc' ";
		$query_update_status = mysqli_query($conn,$update_status);
		if($query_update_status)
		{
			echo "Approved Successfully";
			header("refresh:1;url=Principal_Login.php");
		}
	}
	else
	{
		echo "<h1>Error in sending the Data to Principal</h1>";
	}

?>