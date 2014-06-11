<?php
if(!empty($_POST['nickname']) && !empty($_POST['password']))
{
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$hesh = SHA1($password);
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
		if ($hesh == $row['password'])
		{
			if(session_status() == PHP_SESSION_NONE )
			{
				session_start();
			}
			$_SESSION['user'] = $nickname;
			
			include 'viewlogin.php';
			die();
		}
	}
}
}
include "firstpage.html";
echo "<h4 style = 'position:absolute; background-color: navy; top: 220px; left: 320px; color: white;'>"."Invalid Nick Name or Password"."</h4>";


?>