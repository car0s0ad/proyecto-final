<?php
	$con = mysqli_connect("localhost", "root", "", "inmobd") or die ("La conexión ha fallado");
	$server     = 'localhost';
	$username   = 'root';
	$password   = '';
	$database   = 'inmodb';

	$dsn        = "mysql:host=$server;dbname=$database";
?>