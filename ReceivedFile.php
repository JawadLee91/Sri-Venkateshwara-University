<?php
echo "<h2>Files Received By The Head Of the Department</h2>";
$get_details = "SELECT * FROM `hod_received_data` order by id desc";
$query_get_details = mysqli_query($conn,$get_details);
while($row = mysqli_fetch_array($query_get_details))
{
	$got_id = $row['id'];
	$got_file = $row['received_file'];
	$got_desc = $row['received_description'];
	$got_firstname = $row['sender_firstname'];
	$got_lastname = $row['sender_lastname'];
	$got_regno = $row['sender_regno'];
	$got_mobile = $row['sender_mobile'];
	$got_email = $row['sender_email'];
	$got_username = $row['sender_username'];
	$got_dob = $row['sender_dob'];
	$got_time = $row['sending_time'];
	$got_principal = $row['send_principal'];
	$got_approval = $row['approved'];
	
	if($got_principal == '0')
	{
		$status = "<span style='color:red;font-weight:bold;'>FIle Not Sent To Principal</span>";
		$disable = "enabled";
		$display = "id='show' ";
	}
	elseif($got_principal == '1')
	{
		$status = "<span style='color:white;font-weight:bold;'>File Successfully Sent To Principal</span>";
		$disable = "disabled";
		$display = "id='hide'";
	}
	// Javascript TO Hide and show when the file Sent or not.
		echo "
		<script>
			var x = document.getElementById('hide');
			x.style.display = 'none';
		</script>
		";
	
	// Javascript TO Hide and show when the file Sent or not.
	
	echo "<div class='dez-col-100' style='box-shadow:0px 0px 3px #000;margin-top:10px;'>
	<div class='dez-col-50'>
	<h4>Student Details.</h4>
		<table class='hod_stu_table'>
			<tr><th>First Name</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_firstname</td></tr>
			<tr><th>Last Name</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_lastname</td></tr>
			<tr><th>Register Number</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_regno</td></tr>
			<tr><th>Mobile Number</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_mobile</td></tr>
			<tr><th>Email Address</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_email</td></tr>
			<tr><th>Username</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_username</td></tr>
			<tr><th>Date Of Birth</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_dob</td></tr>
			<tr><th>Sent Time</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_time</td></tr>
			<tr><th>Sent To Principal</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$status</td></tr>
			<tr><th>Principal Approval</th><td style='background:#44B4FD;color:white;padding:3px;font-weight:bold;'>$got_approval</td></tr>
		</table>
		</div>
	";
	
	echo "<div class='dez-col-50'>";
	$Extension = end(explode('.',$got_file));
	if($Extension == 'jpg' || $Extension == 'jpeg' || $Extension == 'png' || $Extension == 'svg' || $Extension == 'gif')
	{
		echo "
		<div class='dez-col-100' >
			<center><a href='OpenImage.php?Image=$got_file'><img src='SentFiles/$got_file' style='width:55%;height:35%;box-shadow:0px 0px 8px #000;' /></a></center>
			<h5>File Extension : $Extension <a href='SendToPrincipal.php?file=$got_file&desc=$got_desc&fname=$got_firstname&lname=$got_lastname&regno=$got_regno&mobile=$got_mobile&email=$got_email&username=$got_username&dob=$got_dob&time=$got_time'><button style='background:#44B4FD;color:white;border:1px solid #44B4FD;padding:1.5%;float:right;font-weight:bold;' id='send_button' $disable $display>Send To Principal</button></a></h5>
			<p><b>Description :</b> $got_desc</p>
		</div>
		";
	}
	elseif($Extension !== 'jpg' || $Extension !== 'jpeg' || $Extension !== 'png' || $Extension !== 'svg' || $Extension !== 'gif')
	{
		echo "
		<div class='dez-col-100' >
			<center><a href='SentFiles/$got_file'><img src='img/document.png' style='width:55%;height:35%;box-shadow:0px 0px 8px #000;' /></a></center>
			<h5>File Extension : $Extension <a href='SendToPrincipal.php?file=$got_file&desc=$got_desc&fname=$got_firstname&lname=$got_lastname&regno=$got_regno&mobile=$got_mobile&email=$got_email&username=$got_username&dob=$got_dob&time=$got_time'><button style='background:#44B4FD;color:white;border:1px solid #44B4FD;padding:1.5%;float:right;font-weight:bold;' id='send_button' $disable $display>Send To Principal</button></a></h5>
			
			<p><b>Description :</b> $got_desc</p>
		</div>
		";
	}
 	elseif($Extension == 'mp3' || $Extension == 'mpeg' || $Extension == 'mp4' || $Extension == 'avi' || $Extension == 'wmv' || $Extension == 'mng' || $Extension == 'webm' || $Extension == 'mkv' || $Extension == 'flv' || $Extension == '3gp')
	{
		echo "
		<div class='dez-col-100' >
			<center><a href='SentFiles/$got_file'><img src='img/video-icon.png' style='width:75%;height:50%;' /></a></center>
			<h5>File Extension : $Extension <a href='SendToPrincipal.php?file=$got_file&desc=$got_desc&fname=$got_firstname&lname=$got_lastname&regno=$got_regno&mobile=$got_mobile&email=$got_email&username=$got_username&dob=$got_dob&time=$got_time'><button style='background:#44B4FD;color:white;border:1px solid #44B4FD;padding:1.5%;float:right;font-weight:bold;' id='send_button' $disable $display>Send To Principal</button></a></h5>
			<p><b>Description :</b> $got_desc</p>
		</div>
		
		";
	}

	
echo "	</div>
	</div>";

}
?>