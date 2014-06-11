<?php
	
	//there is no empty fields;
	if (!empty(mysql_real_escape_string($_POST['name'])) && !empty mysql_real_escape_string(($_POST['password']))) {
		$name = mysql_real_escape_string($_POST['name']);
		$password = $_POST['password'];
	
	//else close the connection;
	} else {
		die("");
	}
	//include the link which contains the needed script for connection;
	include 'connection.php';
	
	
	$sql = "SELECT * FROM user";
	$out = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($out)) {
	 
		//if user is legal
		if ($row['username'] == $name ) {
			if ($row['password'] == $password) {
				//starting session;
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				//user is inside;
				$_SESSION['user'] = mysql_real_escape_string($_POST['name']);
				include 'viewlogin.php';
				die();
			}
		}
	}

?>