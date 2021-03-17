<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "inmobd";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(mysqli_connect_errno())
{
	echo 'Failed to connect '.mysqli_connect_error();
}