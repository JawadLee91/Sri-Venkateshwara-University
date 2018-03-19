<?php
include("Connection/Connect.php");
session_start();
$logged_in = $_SESSION['Princi'];
if(empty($logged_in))
{
	header("refresh:0.01;url=Principal.php");
}
else
{
?>
<html>
<head>
	<title>Welcome Principal of College.</title>
	<meta charset="UTF-8" />
	<meta name="keywords" content="Your Keywords Here" />
	<meta name="description" content="Your Description Here" />
	<meta content="width=device-width;initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/dez-col.css" />
</head>
<body>
<?php include("Assets/header.php"); ?>
<div class="dez-col-100">
	<h1 class="text-center">Welcome Principal Of The College. <a href="Connection/Logout.php">Logout</a></h1>
	<center><p class="text-center" style="font-size:1.1rem;padding-left:7.5%;padding-right:7.5%;">Lets add some Content about the Principal to make him also happy. Lets Highlight the HOD in this page. And also it looks good with some content Here. Lets add some more content.Lets add some Content about the Head of the Department to make him also happy. Lets Highlight the HOD in this page. And also it looks good with some content Here. Lets add some more content.</p></center>
</div>
<div class="dez-col-100">
<?php include("PrincipalReceivedFile.php"); ?>
</div>
<?php include("Assets/Footer.php"); ?>
</body>
</html>
<?php
}
?>