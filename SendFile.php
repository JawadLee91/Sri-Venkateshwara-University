<?php
include("Connection/Connect.php");
session_start();
include("Connection/current_user_info.php");
if(isset($_POST['sent']))
{
	$FileName = $_FILES['sendfile']['name'];
	$FileTmp = $_FILES['sendfile']['tmp_name'];
	$Store = "SentFiles/$FileName";
	
	$Upload = move_uploaded_file($FileTmp,$Store);
	
	if($Upload)
	{
		$Description = $_POST['description'];
		$Time = Date("d/m/y h:i:s");
		
$insert_into_hod = "insert into `hod_received_data`(received_file,received_description,sender_firstname,sender_lastname,sender_regno,sender_mobile,sender_email,sender_username,sender_dob,sending_time,send_principal,approved) values('$FileName','$Description','$current_user_firstname','$current_user_lastname','$current_user_regno','$current_user_mobile','$current_user_email','$current_user_username','$current_user_dob','$Time','0','Not Approved')";
		
		$query_insert_into_hod = mysqli_query($conn,$insert_into_hod);
		
		if($query_insert_into_hod)
		{
			echo "Successfully Sent to H.O.D";
			header("refresh:2;url=Dashboard.php");
		}
		else
		{
			echo "Error in Sending the File to HOD";
		}
	}
	else
	{
		echo "Error in Sending the File";
	}
}
?>
