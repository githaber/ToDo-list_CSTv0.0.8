<?php
	if(session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	//log out;
	if(isset($_SESSION['user']))
		{
			unset($_SESSION['user']);
			include "firstpage.html";
		}
?>