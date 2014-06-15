<?php
	$conn = mysqli_connect("localhost","root","","todolist");
	mysqli_set_charset($conn,"utf8_default_collation");
	if(!$conn)
		{
			echo "Can't accsess to the database";
			die();
		}
?>