<?php
// Getting the Current User Information From the Database.
$current_user = $_SESSION['current_user'];
$Get = "SELECT * FROM `student_details` where username = '$current_user' ";
$GetQuery = mysqli_query($conn,$Get);
while($row = mysqli_fetch_array($GetQuery))
{
	$current_user_firstname = $row['first_name'];
	$current_user_lastname = $row['last_name'];
	$current_user_regno = $row['reg_no'];
	$current_user_mobile = $row['mobile'];
	$current_user_email = $row['email'];
	$current_user_username = $row['username'];
	$current_user_dob = $row['date'];
}
?>