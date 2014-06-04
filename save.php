<?php

if (!empty($_POST['addtask'])) 
		{	
			isset($_POST['priority']);
			isset($_POST['set_date']);
			//isset($_POST['state']);
			//isset($_POST['end_date']);
			$date = date("Y-m-d");
			
			if(!empty($_POST['priority']))
			{	
				$priority = $_POST['priority'];
			}
			if(!empty($_POST['set_date']))
			{	
				$now = $_POST['set_date'];
			}
			//if(!empty($_POST['state']))
			//{	
			//	$state = $_POST['state'];
			//}
			//if(!empty($_POST['end_date']))
			//{	
			//	$end_date = $_POST['end_date'];
			//}
			$current = date('Y-m-d');
			$user=$_SESSION['user'];
			$task = $_POST['addtask'];
			include 'connection.php';
			$sql = "INSERT INTO todolist.task(task,user,priority,starrt_date,end_date)
			values('$task','$user',$priority,'$current','$now');";
			$input = mysqli_query($conn,$sql);
			mysqli_close($conn);


?>