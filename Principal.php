<html>
	<head>
		<title>Welcome To Sri Venkateshwara University | Create an Account</title>
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
	<h2>Principal Login Here!!</h2>
	<form method="post" action="Principal_Validation.php"> <!-- Go to Login.php to Form Handling -->
		<input type="text" name="username" required autofocus placeholder="Enter Username" />
		<input type="password" name="password" required placeholder="Enter Password" />
		<input type="submit" name="submit" value="LOGIN" />
	</form>
</center>
</div>
<!-- ---------------------------------------------------------------------------->
<?php include("Assets/Banner.php"); ?>

<?php include("Assets/Description.php"); ?>

<?php include("Assets/Footer.php"); ?>
</body>
</html>