<?php
include("Connection/Connect.php");

// isset() is used to check whether all content is set or not.
if(isset($_POST['submit']))					// $_POST['submit'] submit is the name of the Submit Button
{
	//Getting all the Input Field Values by using $_POST[''].
	// Recommended : Don't Edit This.
	$FirstName = $_POST['first_name'];
	$LastName = $_POST['last_name'];
	$RegNumber = $_POST['reg_no'];
	$MobileNumber = $_POST['mobile'];
	$Email = $_POST['email'];
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$CreateDate = $_POST['create_date'];
	
	// Now we are going to insert these data into the database table by Name "student_details" which i already created.
	
	// Insert the Data by using Insert Query.
	// Recommended : Don't Edit This.
	$Insert = "INSERT INTO `student_details`(first_name,last_name,reg_no,mobile,email,username,password,date) 	VALUES('$FirstName','$LastName','$RegNumber','$MobileNumber','$Email','$Username','$Password','$CreateDate')";
	
	// Now Lets Execute the above Query by using a Function.
	// Recommended : Don't Edit This.
	$InsertQuery = mysqli_query($conn,$Insert);		
	// $conn : Which Connection we have to insert and which Query has to execute.
	
	// Lets check whether this Query Executed or Not.
	if($InsertQuery)
	{
		// This header function will redirect to another page with a time of 0.01 seconds.
		// Recommended : You can redirect to any other page ( Editable )
		header("refresh:0.01;url=LoginAccount.php");
	}
	else
	{
		// Recommended : You can also use your words as an Error.
		Echo "Error in Inserting the Data";
	}
}
?>