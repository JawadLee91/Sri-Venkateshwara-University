<?php
include("Connection/Connect.php");
session_start();
$current_user = $_SESSION['current_user'];
include("Connection/current_user_info.php");
if(empty($current_user))
{
	header("refresh:0.001;url=LoginAccount.php");
}
else
{
?>
<html>
<head>
	<title>Sri Venkateshwara University | Dashboard | Student Session</title>
	<meta content="width=device-width;initial-scale=1.0" />
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/dez-col.css" />
</head>
<body>
<?php include("Assets/header.php"); ?>
<!-- ---------------------------------------------------------------------------------------->
<div class="dez-col-100">
	<div class="dez-col-50 text-center">
		<div class="dez-col-30 img-fit-small">
			<img src="img/user.png" />
		</div>
		<div class="dez-col-70">
			<h2>Welcome <?php echo $current_user_firstname." ".$current_user_lastname; ?> <a href="Connection/logout.php" style="font-size:1rem;text-decoration:none;">(LOGOUT)</a></h2>
		</div>
		<div class="dez-col-100">
			<p class="padding-small">Here has some content which is editable for a good looking. Please get the Data from the Internet from the Official site of the Sri Venkateshwara University and add some content Here.</p>
		</div>
	</div>
	<div class="dez-col-50">
		<h2>Send File to H.O.D Here :</h2>
		<form method="post" action="SendFile.php" enctype="multipart/form-data">
			<table class="width-full" style="width:100%;border:1px solid black;">
				<tr>
					<td>Send File : </td><td><input type="file" name="sendfile" required  /></td>
				</tr>
				<tr>
					<td><textarea class="border-light" name="description"rows="3" cols="30" placeholder="Description Here" required></textarea></td><td><input type="submit" name="sent" value="Send File" /></td>
				</tr>
			</table>
			<p class="text-center">Send any type of file and any size of file to H.O.D Whether it is image, Doc, HTML, Css, PHP, Java or anything.</p>
			
		</form>
	</div>
</div>
<div class="dez-col-100">
<h2 class="text-center">Files That You Sent to H.O.D</h2>
<?php include("ItemsSent.php"); ?>
</div>
<!-- ---------------------------------------------------------------------------------------->

<?php include("Assets/Description.php"); ?>
<?php include("Assets/Banner.php"); ?>

<div class="dez-col-100">
	<div class="dez-col-50">
		<img src="img/college.jpg" class="college" />
	</div>
	<div class="dez-col-50 content">
		<p>Sri Venkateshwara University, Tirupati, is established in 1954 in the world famous holy Temple town of Tirupati on  the sprawling campus of 1000 acres  with a panoramic and pleasant Hill View.</p>
	</div>
</div>

<?php include("Assets/Footer.php"); ?>
</body>
</html>
<?php
}
?>