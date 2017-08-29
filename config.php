<?php
	session_start();
	$servername ="localhost";
	$username="root";
	$password="";

	$conn= mysqli_connect($servername,$username,$password);
	if (!$conn) die("Unable to connect to MySql: ".mysql_error());
	mysqli_select_db($conn,'drug_database');

	function sanitizeString($var)
	{
		$var = stripslashes($var);
		$var = htmlspecialchars($var,ENT_QUOTES,'UTF-8');
		$var = strip_tags($var);
		return $var;
	}
?>