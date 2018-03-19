<?php
$FileName = $_GET['name'];
header("content-disposition:inline");
header("content-type:application/msword");
readfile($FileName);
exit;
?>