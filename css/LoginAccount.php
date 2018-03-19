<html>
	<head>
		<title>Welcome To Sri Venkateshwara University | Student Login Account</title>
		<meta charset="UTF-8">
		<meta name="keywords" content="Your Keywords Here">
		<meta name="description" content="Your Description Here">
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/dez-col.css" />
	</head>
<body>
<?php include("Assets/Header.php"); ?>
<!-- ---------------------------------------------------------------------------->
<div class="dez-col-100">
<center>	<h1>Welcome to Sri Venkateshwara University</h1>
	<h2>Login Here</h2>
	<form method="post" action="Create.php">
		<input type="text" name="first_name" required autofocus placeholder="First Name" />
		<input type="text" name="last_name" required placeholder="Last Name" />
		<input type="submit" name="submit" value="CREATE" />
	</form>
</center>
</div>
<!-- ---------------------------------------------------------------------------->
<?php include("Assets/Banner.php"); ?>

<?php include("Assets/Description.php"); ?>

<?php include("Assets/Footer.php"); ?>
</body>
</html>