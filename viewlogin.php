<?php
	if(session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if(!$_SESSION['user']) {
		include 'firstpage.html';
		die();
	}
?>
<html>
<script src = 'jquery.js'></script>
<script>
	
	$(document).ready(function(){
		$('#logout').click(function(){
			$('#logoutdiv').slideToggle(500);
		});
	});
</script>
<button id = 'logout'><h3 id = 'hello'> Hello <user><?php echo " ".$_SESSION['user'];?> </user></h3></button>

<form action="logout.php" method="post">
	
	<div id = 'logoutdiv'>
		<input type = 'submit' value = 'logout'>
	</div>
	
</form>

<head>
	<style>
		#logout
			{
				
			}
		#logoutdiv
			{	
				display:none;
				border solid 1px; 
				height: 200px;
				width: 161px;
				background: silver;
				position: absolute;
				top:67px;
				right: 15px;
				border-bottom-left-radius:12px;
				border-bottom-right-radius:12px;
				outline-color: navy;
				margin:auto;
			}
		
		#hello 
			{
				color: purple;
			}
		body 
			{
				background-color:#d0e4fe;
			}
		#add_task
			{
				color:navy;
			}
		#leave_blank_line
			{
				color:grey;
			}
		#save_your_tasks
			{
				float-left:80px;
			}
		#logout
			{
				position: absolute;
				right: 13px;
				
				width: 164px;
				border-top-right-radius:12px;
				border-top-left-radius:12px;
				outline-color:#d0e4fe;
				background-color: navy;
			}
			
		#textarea
			{
				position: absolute;
				right: 120px;
				top: 300px;
				border:solid 1px;
				width:550px;
				height:470px;
				border-radius:16px;
				position:relative;
				left:600px;
				top:-200px;
				background:green;
				box-shadow: 10px 10px 15px rgb(12,141,213);
				background:"ToDo-list.png";
			}
			
		#tasks
			{
				background:rgb(111,111,111	);
				font: normal 14px verdana;
				padding: 2px 10px;
				border-bottom: 1px dotted #ccc;
				text-indent: 25px;
				height: auto;
				text-transform: capitalize;
				resize:none; 
				border-radius:12px;			
				width:500px;
				height:400px;
				display: block;
				margin-left: auto;
				margin-right: auto;
				margin-top: 40;
			}
		
		#tasks:focus
			{
				background:white;
				font: normal 14px verdana;
				padding: 2px 10px;
				border-bottom: 1px dotted #ccc;
				text-indent: 25px;
				height: auto;
				text-transform: capitalize;
				resize:none; 
				border-radius:12px;			
				width:500px;
				height:400px;
				display: block;
				margin-left: auto;
				margin-right: auto;
				margin-top: 40;
			}
		
		#tasks:active
			{
				background:red;
				font: normal 14px verdana;
				padding: 2px 10px;
				border-bottom: 1px dotted #ccc;
				text-indent: 25px;
				height: auto;
				text-transform: capitalize;
				resize:none; 
				border-radius:12px;			
				width:500px;
				height:400px;
				display: block;
				margin-left: auto;
				margin-right: auto;
				margin-top: 40;
			}
		
		#aroundtextarea
			{
				position: absoulte;
				height: 600px;
				width: 400px;
				border:solid 1px red;
				right: 30px;
			}
		
		#addtask
			{
				resize:none; 
				margin:auto;
				border-top-left-radius:16px;
				border-top-right-radius:16px;
				box-shadow: 10px 10px 15px rgb(12,141,213);
			}
		
		#addtask:active
			{
				resize:none; 
				margin:auto;
				border-top-left-radius:16px;
				border-top-right-radius:16px;
				outline-color:white;
			}
		
		#addtask:focus
			{
				resize:none; 
				margin:auto;
				border-top-left-radius:16px;
				border-top-right-radius:16px;
				outline-color:#d0e4fe;
				
			}
		
		#nexttask 
			{
				position: absolute;
				left 550px;
				background:white;;
				border-bottom-left-radius:16px;
				border-bottom-right-radius:16px;
				height:45px;
				width:501px;
				margine:auto;
				outline:black;
				box-shadow: 10px 10px 15px rgb(12,141,213);
				background-color: green;
				
			}
		
		#editbut
			{
				font-face: 'Comic Sans MS';
				font-size: larger; color: red; 
				background-color: navy;
				border: 3pt ridge lightgrey;
				border-bottom-left-radius:8px;
				border-bottom-right-radius:12px;
				border-top-right-radius:8px;
				border-top-left-radius:12px;
			}
		
		user
			{
				color:red;
			}
		
		#editdiv
			{
				
			}
	</style>
</head>

<?php
/*include the link which contains the needed script for connection;
include 'connection.php';

if (!empty($_POST['addtask'])) 
	{
		$task = $_POST['addtask'];
		$sql = "INSERT INTO task(task)
		values('$task')";
		$input = mysqli_query($conn,$sql);
		mysqli_close($conn);	
	}
	*/
?>



<body>
	<h4 id = 'add_task'> Tasks to add to the list </h4>
	<form action = "viewlogin.php" method = "POST">
		<textarea id = 'addtask' name="addtask"rows = '5' cols = '60'></textarea><br>
		<input type='submit' id = 'nexttask' value=' Next Task'>
	</form>
	<br /><br /><br /><br /><br />
	
<div id = 'textarea'>
	<INPUT id = 'editbut' type=button value="Edit" onclick="return validate()"><a></a>	
<div id = 'editdiv'>
	<form method="POST" action="viewlogin.php">
	<div id = 'priority'>
		Very Important<input type = "radio" name ='priority' value = '2'><br />
		Normaly Important<input type = "radio" name ='priority' value = '1'><br />
		Just Should Remember<input type = "radio" name ='priority' value = '0'><br />
	</div>
		<script language = 'javascript' type="text/javascript">
			function validate() {
			x=document.getElementById("tasks")
			x.disabled = !x.disabled;
			}
		</script>
	</form>
</div>
	<textarea id ='tasks' disabled="true">
<?php
	if (!empty($_POST['addtask'])) 
		{	
			if(!empty($_POST['priority']))
			{
				$priority = $_POST['priority'];
			}
			$user=$_SESSION['user'];
			$task = $_POST['addtask'];
			include 'connection.php';
		//	echo $priority;
			$sql = "INSERT INTO todolist.task(task,user,priority)
			values('$task','$user','$priority');";
			$input = mysqli_query($conn,$sql);
			mysqli_close($conn);
		}
?>			
					
<?php
	include 'connection.php';
	$user=$_SESSION['user'];
	 
	$sql = "SELECT * FROM todolist.task; ";
	$output = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($output)) 
	{
		if($user = $row['user'])
		{
			echo $row['task'];
		}
	}
?>
	</textarea>
</div>		
	
</body>
</html>