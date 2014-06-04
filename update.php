<?php
	$taskid = $_POST['idtask'];
	$task = $_POST['task'];
	include 'connection.php';
	$sql="select * from task;";
	$query=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($query))
		{
			$update_task = "UPDATE todolist.task SET task='$task' WHERE idtask='$taskid';";
			$r = mysqli_query($conn,$update_task);
		}
	include "taskreview.php";
	die();
?>