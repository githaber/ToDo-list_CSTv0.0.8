<?php
	//starting session 
	if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
	//if there is user, let him/her in;
	if(isset($_SESSION['user'])) {
		include 'viewlogin.php';
	//else stay where you are; the same page;
	} else {
		include 'firstpage.html';
	}
?>