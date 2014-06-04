<?php
	if(session_status() == PHP_SESSION_NONE) 
	{
		session_start();
	}
	if(!$_SESSION['user']) 
	
	{
		include 'firstpage.html';
		die();
	}
?>
<html>

<head>
	<style>
		#tasks
			{
				position: absolute;
				height: auto;
				width: 400px;
				top: 340px;
				border:solid 1px red;
				right: 40px;
				border-top-left-radius:16px;
				border-top-right-radius:16px;
				box-shadow: 10px 10px 15px rgb(12,141,213);
				width: 700px;
				height: auto;
				//color: blue;
				border: 7px #372BC2 outset;

				background-color: #D7F7FA;

				padding: 8px;

				font-family: Verdana, Geneva, sans-serif;
				
				text-align: left;
				font-size: 9px;

				line-height: 1.65;
				letter-spacing: 0em;
				word-spacing: 3px;

				-webkit-border-radius: 27px 27px 27px 27px;
				-moz-border-radius: 27px 27px 27px 27px;
				border-radius: 27px 27px 27px 27px;


				-moz-box-shadow: 4px -6px 0px 6px rgba(204, 204, 204, 0.5);
				-webkit-box-shadow: 4px -6px 0px 6px rgba(204, 204, 204, 0.5);
				box-shadow: 4px -6px 0px 6px rgba(204, 204, 204, 0.5);

				transform:scale(1);
				-ms-transform:scale(1);
				-moz-transform:scale(1);
				-webkit-transform:scale(1);
				-o-transform:scale(1);
				font-family:Comic Sans MS;
			}
			
		#addtask
			{
				resize:none; 
				margin:auto;
					border-top-left-radius:16px;
				//box-shadow: 10px 10px 15px rgb(12,141,213);
			}
			
		#addtask:active
			{
				resize:none; 
				margin:auto;
				border-top-left-radius:16px;
				//border-top-right-radius:16px;
				outline-color:white;
			}
			
		#addtask:focus
			{
				resize:none; 
				margin:auto;
				border-top-left-radius:16px;
			//	border-top-right-radius:16px;
				outline-color:#d0e4fe;
				
			}
			
		#priority
			{	
				//width:200px;
				//height:-150px;
				border:solid 1px;
				position: absolute;
				top: 191px;
				left: 509px;
				//border-bottom-right-radius:16px;
				border-top-right-radius:16px;
				height:82px;
				//box-shadow: 1px 1px 15px rgb(12,141,213);
				background:#D7F7FA;
				border-color: navy;
			}
			
		#editbut
			{    
				position: absolute;
				top: 289px;
				right:330px;
				height: 33px;
				width: 300px;
				font-face: 'Comic Sans MS';
				font-size: larger; color: red; 
				background-color: navy;
				border: 3pt ridge lightgrey;
				border-bottom-right-radius:12px;
				border-bottom-left-radius:12px;
				border-top-left-radius:16px;
				border-top-right-radius:16px;
				
			}
			
		#nexttask
			{
			
				position: absolute;
				left 550px;
				background:white;;
				border-bottom-left-radius:16px;
				border-bottom-right-radius:16px;
				height:45px;
				width:663px;
				margine:auto;
				outline:#057BA6;
				box-shadow: 10px 10px 15px rgb(12,141,213);
				background-color: blue;
				border-color:#057BA6;
				border: 5px;
				
			}
			
		#nexttask:hover
			{
				position: absolute;
				left 550px;
				background:white;;
				border-bottom-left-radius:16px;
				border-bottom-right-radius:16px;
				height:45px;
				width:663px;
				margine:auto;
				outline:black;
				box-shadow: 10px 10px 15px rgb(12,141,213);
				background-color: white;
				color:black;
				font-weight:bold;
				
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
			
		user
			{
				color:red;
			}
			
		#logoutdiv
			{
				display:none;
				border solid 1px; 
				height: 200px;
				width: 160px;
				//background: silver;
				position: absolute;
				top:155px;
				right: 15px;
				border-bottom-left-radius:12px;
				border-bottom-right-radius:12px;
				outline-color: navy;
				margin:auto;
			}
			
		#MakeLogOut
			{
				position: relative;
				//right: 2px;
				width: 161px;
				height: 55px;
				border-bottom-right-radius:12px;
				border-bottom-left-radius:12px;
				outline-color:#d0e4fe;
				background-color: navy;
				color: red;
				font-size:18px;
				padding:25px;
			}
		#time_submit_butt
			{
				position: absolute;
				top: 40px;
				left: 160px;
				width: 75px;
				height:35px;
				border-bottom-left-radius:8px;
				border-bottom-right-radius:9px;
				border-top-right-radius:9px;
				border-top-right-radius:7px;
				background-color: navy;
				color: red;
				font-size:17px;
			}
		#marquee
			{
				//background-color:#00FFFF;
				border-width:2px; 
				border-style:none; 
				border-color:#000099; 
				font-family:comic sans ms; 
				font-size:16pt; 
				text-color:navy;
				direction="left" behavior="scroll" scrollamount="1"
				color: navy;
			}
		task	
			{	
				text-shadow:-2px 0px 14px rgba(250,250,250,0.2);
				font-weight:normal;
				color:#4628BF;
				background-color:#E6EDE9;
				letter-spacing:0pt;
				word-spacing:2pt;
				font-size:12px;
				text-align:left;
				font-family:comic sans, comic sans ms, cursive, verdana, arial, sans-serif;
				line-height:2;
			}
		cu
			{
				color: blue;
			}
		cst
			{
				color: red;
			}
		#cu_reclam
			{
				 background: -webkit-linear-gradient(90deg, rgba(8, 143, 57, 0.07) 5%, rgba(213, 219, 178, 0.89) 100%);
				color: navy;
				-webkit-text-fill-color: transparent;
				-webkit-background-clip: text;
				font-size:78px;
				font-family: ABeeZee;
				direction="left" behavior="scroll" scrollamount="8"
			}
		
		.TaskReviewButton
			{
				position: absolute;
				right: 180px;
				bottom: 130px;
			}
		
		.TaskReviewButton
			{
				-moz-box-shadow:inset -39px -3px 8px -35px #cae3fc;
				-webkit-box-shadow:inset -39px -3px 8px -35px #cae3fc;
				box-shadow:inset -39px -3px 8px -35px #cae3fc;
				background-color:#074b8f;
				-webkit-border-top-left-radius:40px;
				-moz-border-radius-topleft:40px;
				border-top-left-radius:40px;
				-webkit-border-top-right-radius:40px;
				-moz-border-radius-topright:40px;
				border-top-right-radius:40px;
				-webkit-border-bottom-right-radius:40px;
				-moz-border-radius-bottomright:40px;
				border-bottom-right-radius:40px;
				-webkit-border-bottom-left-radius:40px;
				-moz-border-radius-bottomleft:40px;
				border-bottom-left-radius:40px;
				text-indent:-0.86px;
				border:5px solid #469df5;
				display:inline-block;
				color:#ffffff;
				font-family:Comic Sans MS;
				font-size:16px;
				font-weight:normal;
				font-style:normal;
				height:33px;
				line-height:33px;
				width:84px;
				text-decoration:none;
				text-align:center;
				text-shadow:0px 2px 4px #287ace;
			}
			.TaskReviewButton:hover
			{
				background-color:#4197ee;
			}
			.TaskReviewButton:active
			{
				position:relative;
				top:1px;
			}
			
			.NextButton 
			{
				position:absolute;
				right:179px;
				//top: 160px;;
				-moz-box-shadow:inset 26px 24px 47px -41px #fce2c1;
				-webkit-box-shadow:inset 26px 24px 47px -41px #fce2c1;
				box-shadow:inset 26px 24px 47px -41px #fce2c1;
				background-color:#102294;
				-webkit-border-top-left-radius:42px;
				-moz-border-radius-topleft:42px;
				border-top-left-radius:42px;
				-webkit-border-top-right-radius:42px;
				-moz-border-radius-topright:42px;
				border-top-right-radius:42px;
				-webkit-border-bottom-right-radius:42px;
				-moz-border-radius-bottomright:42px;
				border-bottom-right-radius:42px;
				-webkit-border-bottom-left-radius:42px;
				-moz-border-radius-bottomleft:42px;
				border-bottom-left-radius:42px;
				text-indent:1.72px;
				border:4px solid #51ceed;
				display:inline-block;
				color:#f7e200;
				font-family:Comic Sans MS;
				font-size:16px;
				font-weight:normal;
				font-style:normal;
				height:30px;
				line-height:30px;
				width:63px;
				text-decoration:none;
				text-align:center;
				text-shadow:0px 0px 4px #cc9f52;
				
			}
			.NextButton:hover
			{
				background-color:#fcfcfc;
			}
			/* ********* when button is active can't response the request. link do not working.
			.NextButton:active 
			{
				position:relative;
				top:1px;
			}*/
			.Back_butt 
			{	
				position: absolute;
				right:260px;
				font-size: 16px;
				font-family:Comic Sans MS;
				font-weight:normal;
				-moz-border-radius: 19px;
				-webkit-border-radius: 19px;
				border-radius: 19px;
				border: 3px solid #3866A3;
				padding: 6px 14px;
				text-shadow:4px 2px 5px #5E5E5E;
				-moz-box-shadow:inset -2px -2px 13px 9px #BEE2F9;
				-webkit-box-shadow:inset -2px -2px 13px 9px #BEE2F9;
				box-shadow:inset -2px -2px 13px 9px #BEE2F9;
				font-weight:normal;
				text-decoration:none;
				cursor: pointer;
				background:-webkit-linear-gradient(275deg, rgba(70, 140, 207, 0.73) 42%, rgba(99, 184, 238, 0.73) 67%);
				background:-moz-linear-gradient(275deg, rgba(70, 140, 207, 0.73) 42%, rgba(99, 184, 238, 0.73) 67%);
				background:-ms-linear-gradient(275deg, rgba(70, 140, 207, 0.73) 42%, rgba(99, 184, 238, 0.73) 67%);
				background:linear-gradient(365deg, rgba(99, 184, 238, 0.73) 42%, rgba(70, 140, 207, 0.73) 67%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#63b8ee', endColorstr='#468ccf');
				/*background-color:rgba(70, 140, 207, 0.73);*/
				color:#FFFFFF;
				display:inline-block;
			}
			.Back_butt:hover
			{
				background:-webkit-linear-gradient(275deg, rgba(99, 184, 238, 0.73) 42%, rgba(70, 140, 207, 0.73) 67%);
				background:-moz-linear-gradient(275deg, rgba(99, 184, 238, 0.73) 42%, rgba(70, 140, 207, 0.73) 67%);
				background:-ms-linear-gradient(275deg, rgba(99, 184, 238, 0.73) 42%, rgba(70, 140, 207, 0.73) 67%);
				background:linear-gradient(365deg, rgba(70, 140, 207, 0.73) 42%, rgba(99, 184, 238, 0.73) 67%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee');
				/*background-color:rgba(99, 184, 238, 0.73);*/
			}
			/*.css_button:active {
				position:relative;
				top:1px;
			}*/
			.rotate 
			{	
				font-weight:normal;
				font-style:normal;
				background-color: navy;
				font-family: comic sans MS;
				font-size: 15px;
				position: absolute;
				border-top-right-radius:8px;
				border-top-left-radius:8px;
				left:1260px;
				top:420px;
				width:170px;
				color:red;position:absolute;right:0px;
				/* Safari */
				-webkit-transform: rotate(90deg);

				/* Firefox */
				-moz-transform: rotate(90deg);

				/* IE */
				-ms-transform: rotate(90deg);

				/* Opera */
				-o-transform: rotate(90deg);

				/* Internet Explorer */
				filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
			}
		#task_table_id
			{
				color: navy;
			}
		#date_table_id
			{
				width:120px;
				color: silver;
			}
	</style>
	<!--<link rel = 'stylesheet' type = 'text/css' href = 'viewlogin.css'></link>-->
</head>

<script src = 'jquery.js'></script>

<script>
	
	$(document).ready(function(){
		$('#logout').click(function(){
			$('#logoutdiv').slideToggle(200);
		});
	});
</script>

<!--<marquee id = 'marquee'>Maybe the <mark>best</mark> place for <b>your reclam</b></marquee>-- advertise teaser ----------------->
<marquee id = 'cu_reclam'><span><cu>Caucasus University</cu><cst>~Caucasus School of Technology</cst> <cstcolor>CS</cstcolor>T</span></marquee>

<button id = 'logout'><h3 id = 'hello'> Hello <user><?php echo " ".$_SESSION['user'];?> </user></h3></button>

<form action="logout.php" method="post">
	
	<div id = 'logoutdiv'>
		<input id = 'MakeLogOut' type = 'submit' value = 'logout'>
	</div>
	
</form>


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
	
<div id = 'editbut'>
<button onclick="somefunction()">Save Changes</button>
<!--<button id = 'updatetaskbutt' type = 'submit'>SaveEditings</button> I just raplaced idea, there is no need for this button at all -->
<!--<INPUT id = 'editbut' type=button value="Edit" onclick="return validate()"><a></a>-->
	<button onclick="ToggleEditable (this);">Deny to edit!</button>
</div>
<div id = 'editdiv'> 									


	<form action = "viewlogin.php" method = "POST">
		<div id = 'set_time'>
			<!--Time:<input type="time" name="timeformat"/>--- i don't need to insert the time -->
			<!--<input id = 'time_submit_butt' type="submit" value="Submit" />-->
		</div>
		<div id = 'set_date'>
			<task>I am going to do this task for:</task><input type = 'date' name = 'set_date'/>
			<!--<input id = 'set_date_butt' type = 'submit' value = 'SaveDate'>-->
		</div>
		<div id="addtask">
		<textarea id = 'addtask' name="addtask"rows = '5' cols = '60'></textarea>
		</div>
		<input type='submit' id = 'nexttask' value=' Next Task'> 
		
	<div id = 'priority'>
	
		<input id = 'radio' type = "radio" name ='priority' value = '3'>Very Important<br />
		<input id = 'radio' type = "radio" name ='priority' value = '2'>Normaly Important<br />
		<input id = 'radio' type = "radio" name ='priority' value = '1'>Just Should Remember<br />
	
	</div>
	
	
	</form>
	
		<script>
			$('select.required').change
			(
				function()
					{
						var total = $('select.required').length;
						var selected = $('select.required option:selected').length;
						$('#submitorder').attr('disabled', (selected == total));
					}
			);
</script>
		<script language = 'javascript' type="text/javascript">
		      function ToggleEditable (button) {
            var div = document.getElementById ("tasks");

            if (div.contentEditable == "true") {
                div.contentEditable = "false";
                button.innerHTML = "Enable editing!";
            }
            else {
                div.contentEditable = "true";
                button.innerHTML = "Disable editing!";
            }
        }
		
		
		/*****************************
		*****that version works properly for textarea, but i reconfigured it to div**********
			function validate() {
			x=document.getElementById("tasks")
			x.disabled = !x.disabled;
			}
		******************************/
		</script>
		
		
		
	<!---         script                  -->	
	<!-- js for scroll is different -------->
	<!--      tasklist div               --->	
	
		<script language = 'javascript' type = 'text/javascript'>
		/*
		function mainFunc() 
		{
				
			var scroldiv = document.getElementById('scroldiv');
			if(scroldiv != null)
				{
					if(document.body.scrolltop > 50)
						{
							scroldiv.style.display = "block";
						} 
					else 
						{
							//scroldiv.style.display = "none";
						}
				}
		}
		setInterval(function(){mainFunc()},100);
		*/
		</script>
</div>
	
	<div id = 'tasks' contentEditable = "true">				
	
<?php
			//$priority = $_POST['priority'];
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
		}
?>			
	<!--<textarea id ='tasks' disabled="true">
	</textarea>-->
<?php
	include 'connection.php';
	if(session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}
	
	$user = $_SESSION['user'];
	if(empty($_GET)){
		$sql = "SELECT * FROM todolist.task WHERE user = '$user' limit 5; ";
	} else if(!empty($_GET['next'])) {
		$next = $_GET['next'];
		$sql = "SELECT * FROM todolist.task WHERE user = '$user' AND idtask >= $next limit 5; ";
	}
	$output = mysqli_query($conn,$sql);
	
	$priority = "SELECT priority FROM todolist.task;";
	
	
	
	$counter = 1; 
	$id = 0; 
	echo "<table> ";
	while($row = mysqli_fetch_assoc($output)) 
		{
	?>
	<a href="taskreview.php?id=<?php echo $row['idtask']?>">
	<?php
	
	echo "<tr><td id = 'task_table_id'>".$counter . ".  " . $row['task']."</td>";
			$counter ++ ;
			$id = $row['idtask'] ++;
		$today = date('d-m-y');
		$ramesxva = substr($today, 0, 2);
	//	echo "ramesxva".$ramesxva."<br />";
		
		$k=substr($row['end_date'],8,10);
		$state = $k-$ramesxva;
		$d="Left"." ".$state." "."Day(s)"."<br />";
		echo "<td id = 'date_table_id' >".$d."</td>";
			echo  "<td>";
		if($row['priority'] == 1) // check how important it is ********* not very important.....********by default not very important***********
			{
				$r= " "."<img src = Images/justshouldremember.png>"."<br />";
			}
		if($row['priority'] == 2) // check how important it is ********* normaly important ***********
			{
				$r= " "."<img src = Images/normalyimportant.png>"."<br />";
			}
		if($row['priority'] == 3)
			{
				$r=  " "."<img src = Images/veryimportant.png>"."<br />";  
			}		
		if ($state < 0)
			{
				echo 'Time For This Task Expired';
			}
		echo $r."</td>";
		
		//echo "tararam".$row['end_date']."<br />";
	//	echo $today;
	
	//if(empty($idtask2)) {
	// echo $idtask2 = $row['idtask'];
	// die();
	//}
	?>
	
	</a>
	<?php
	$idtask1 = $row['idtask'];
	}echo "</tr></table>";
?>
	</div>
	<?php
		$next1 = $idtask1 + 1;
		$sql = "SELECT * FROM todolist.task WHERE user = '$user' AND idtask = $next1;";
		$output = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($output);
		if(!empty($row['idtask'])){
	?>
	<a class="NextButton" href="viewlogin.php?next=<?php echo $idtask1;?>" >
		Next
	</a>
	<?php
		}
	?>
	
	<a class = 'Back_butt' href="viewlogin.php" >
		Back
	</a>
	
	<a href="taskreview.php" ><button class = "rotate" style="">Review All</button> </a><!-- unda mivaba  -------------------->
</div>													<!--======taskreview.php============-->
<script>

function somefunction()
	{
		var html = encodeURIComponent($("#tasks").html());
		$.ajax({
		   url: "save.php",
		   data: "content="+html
		})
	}

</script>
</body>
</html>