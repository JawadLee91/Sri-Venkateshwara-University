<?php
include("Connection/Connect.php");
if(isset($_POST['submit']))
{
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	
	$Validate = "SELECT * FROM `student_details` where username = '$Username' and password = '$Password' ";
	$ValidateQuery = mysqli_query($conn,$Validate);
	$count = mysqli_num_rows($ValidateQuery);	// Counts the Number of Rows in this Query.
	
	if($count == '1')
	{
		session_start();
		$_SESSION['current_user'] = $Username;
		header("refresh:0.001;url=Dashboard.php");
	}
	else
	{
		header("refresh:0.01;url=CreateAccount.php");
	}
}
?>