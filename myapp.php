<?php
session_start();
$servername ="localhost";
$username="root";
$password="";

$conn= mysql_connect($servername,$username,$password);

if (!$conn) {
	die("Connection failed:" .mysql_connect_error());
}
echo "Connected Successfully";

// #$sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

#mysqli_close($conn);
if ($_SESSION['result']!=Null) {
	$showresult = $_SESSION['result']
}
if ($_POST) {
	
}
?>