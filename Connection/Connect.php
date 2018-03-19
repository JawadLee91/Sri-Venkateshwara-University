<?php
// Server Address By Default is 127.0.0.1
$Server_Address = "127.0.0.1";

// Username of the Localhost is "root" by Default
$Username = "root";

// Password is Empty by Default for Localhost
$Password = "";

// DataBase name i created is "SVU"
$DataBase = "SVU";

// This function helps you to connect to Server and DataBase.
$conn = mysqli_connect($Server_Address,$Username,$Password,$DataBase);

// Keep in Mind : This $conn will use in many Place.

?>