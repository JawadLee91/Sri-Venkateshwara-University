<?php
include("Connection/Connect.php");
session_start();
session_destroy();
header("refresh:0.001;url=../Dashboard.php");
?>