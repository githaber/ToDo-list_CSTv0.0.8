<?php
	$taskid = $_POST['idtask'];
	//echo $taskid;
	//$task = $_POST['task'];
	include 'connection.php';
	$sql="select * from todolist.task;";
	$query=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($query))
		{
			$delete_task = "DELETE FROM todolist.task WHERE idtask='$taskid';";
			$l = mysqli_query($conn,$delete_task);
		}
	include 'taskreview.php';
	//die();
?>