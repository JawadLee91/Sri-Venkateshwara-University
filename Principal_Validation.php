<?php
include("Connection/Connect.php");
if(isset($_POST['submit']))
{
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	
	if($Username == 'princi_svu@admin.com' && $Password == 'PrinciOfCollege')
	{
		session_start();
		$_SESSION['Princi'] = $Username;
		header("refresh:0.01;url=Principal_Login.php");
	}
	else
	{
		Echo "Invalid Login Credentials. Please check again or Ask for Administrator of the College. Thank You!!";
	}
}
?>