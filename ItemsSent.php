<?php
include_once("Connection/Connect.php");
$get_items = "select * from `hod_received_data` where sender_username='$current_user' and sender_email = '$current_user_email' ";
$query_get_items = mysqli_query($conn,$get_items);
while($row = mysqli_fetch_array($query_get_items))
{
	$get_file = $row['received_file'];
	$get_description = $row['received_description'];
	$get_sending_time = $row['sending_time'];
	$get_status = $row['send_principal'];
	$get_approval = $row['approved'];
	
	
	if($get_status == '1')
	{
		$status = "<span style='background:#44B4FD;color:white;padding:2px;'>File Sent TO Principal</span>";
	}
	if($get_status == '0')
	{
		$status = "<span style='background:red;color:white;padding:3px;'>File Not Sent To Principal</span>";
	}
	
	//----------------------------------------------
	
	$Extension = end(explode('.',$get_file));
	
	if($Extension == 'jpg' || $Extension == 'jpeg' || $Extension == 'png' || $Extension == 'svg' || $Extension == 'gif')
	{
		echo "
		<div class='dez-col-25' >
			<img src='SentFiles/$get_file' style='width:100%;height:60%;' />
			<h5>File Extension : $Extension </h5>
			<b>File Sent Time : $get_sending_time</b><br><br>
			<b>Status : $status</b><br><br>
			<b>Approval : $get_approval</b>
			<p><b>Description : </b>
			$get_description</p>
		</div>
		
		";
	}
	elseif($Extension !== 'jpg' || $Extension !== 'jpeg' || $Extension !== 'png' || $Extension !== 'svg' || $Extension !== 'gif')
	{
		echo "
		<div class='dez-col-25' >
			<img src='img/document.png' style='width:100%;height:60%;' />
			<h5>File Extension : $Extension </h5>
			<b>File Sent Time : $get_sending_time</b><br><br>
			<b>Status : $status</b><br><br>
			<b>Approval : $get_approval</b><br>
			<p><b>Description : </b>
			$get_description</p>
		</div>
		
		";
	}
 	elseif($Extension == 'mp3' || $Extension == 'mpeg' || $Extension == 'mp4' || $Extension == 'avi' || $Extension == 'wmv' || $Extension == 'mng' || $Extension == 'webm' || $Extension == 'mkv' || $Extension == 'flv' || $Extension == '3gp')
	{
		echo "
		<div class='dez-col-25' >
			<img src='img/video-icon.png' style='width:100%;height:60%;' />
			<h5>File Extension : $Extension </h5>
			<b>File Sent Time : $get_sending_time</b><br><br>
			<b>Status : $status</b><br><br>
			<b>Approval : $get_approval</b><br>
			<p><b>Description : </b>
			$get_description</p>
		</div>
		
		";
	}
	
}
?>
