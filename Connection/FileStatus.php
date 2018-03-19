<?php

$get_status = "select * from `principal_received_data` where file_name='$get_file' and file_desc = '$get_description' ";
$query_get_status = mysqli_query($conn,$get_status);
while($row = mysqli_fetch_array($query_get_status))
{
	$FileStatus = $row['status'];
}
?>