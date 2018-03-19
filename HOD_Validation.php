<?php
include("Connection/Connect.php");
if(isset($_POST['submit']))
{
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	
	if($Username == 'hod_svu@admin.com' && $Password == 'HeadOfDept')
	{
		session_start();
		$_SESSION['HOD'] = $Username;
		header("refresh:0.01;url=HOD_Login.php");
	}
	else
	{
		Echo "Invalid Login Credentials. Please check again or Ask for Administrator of the College. Thank You!!";
	}
}
?>