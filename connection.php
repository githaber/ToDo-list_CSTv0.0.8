<?php
	$conn = mysqli_connect("localhost","root","","todolist");
	if(!$conn)
		{
			echo "Can't accsess to the database";
			die();
		}
?>