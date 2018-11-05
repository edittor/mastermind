<?php

require ('db_connect.php');

	$pwd = $_POST['password'];
	$salt = "add your own salt over here";
	$pwd = $salt.$pwd;
	
	for ($i=0; $i < 1000; $i++) {
		$pwd = sha1($pwd);
	}

	$username = $_POST['username'];

	$existing_users = $conn->query($sql);
	
	$sql =	"add your own database tables over here";		
	$conn->query($sql);
			header ("Location: ../inloggen.php");
?>