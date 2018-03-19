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
	<h2>Create an Account??</h2>
	<form method="post" action="Create.php">
		<input type="text" name="first_name" required autofocus placeholder="First Name" />
		<input type="text" name="last_name" required placeholder="Last Name" />
		<input type="text" name="reg_no" required placeholder="Registration Number" />
		<input type="text" name="mobile" required placeholder="Mobile Number" />
		<input type="email" name="email" required placeholder="Email Address" />
		<input type="text" name="username" required placeholder="Enter Username" />
		<input type="password" name="password" required placeholder="Enter Password" />
		<input type="text" name="create_date" required placeholder="MM/DD/YYYY" />
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