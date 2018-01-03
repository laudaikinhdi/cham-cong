<?php 
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "qlcc";

	$conn = new mysqli($server,$username,$password,$dbname);

	$conn->set_charset('utf8');
 ?>