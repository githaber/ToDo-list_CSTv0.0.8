<?php

$nickname = $_POST['nickname'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost', 'root', '', 'todolist');
if(!$conn)
	{
		die('You are not connected');
	}
$checkuser = 'SELECT * FROM todolist.information;';
$query = mysqli_query ($conn, $checkuser);
while ($row = mysqli_fetch_assoc($query))
{
	if ($nickname == $row['nickname'])
	{
		if ($password == $row['password'])
		{
			if(session_status() == PHP_SESSION_NONE )
			{
				session_start();
			}
			$_SESSION['user'] = $nickname;
			
			include 'viewlogin.php';
		}
	}
}


?>