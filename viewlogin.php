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
	<link rel = 'stylesheet' type = 'text/css' href = 'viewlogin.css'></link>
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
<marquee id = 'cu_reclam'><img src="Images/cst_logo.jpg" width="120" height="56" alt="cst" /><cu>Caucasus University</cu><cst>~Caucasus School of Technology</cst> <cstcolor>CS</cstcolor>T</marquee>
<marquee><span style = 'color:red;'>The Best Place For Your Reklam</span></marquee>

<button id = 'logout'><h3 id = 'hello'> Hello <user><?php echo " ".$_SESSION['user'];?> </user></h3></button>

<form action="logout.php" method="post">
	
	<div id = 'logoutdiv'>
		<input id = 'MakeLogOut' type = 'submit' value = 'logout'>
	</div>
	
</form>


<?php
/*include the link which contains the needed script for connection;*************
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
		<textarea id = 'addtask' name="addtask"rows = '5' cols = '45'></textarea>
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
				
			var scroldiv = document.getElementById('tasks');
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
	
	<script language = 'javascript' type = 'text/javascript'>
/*	
	function thirty_pc() {
    var height = $(window).height();
    var thirtypc = (30 * height) / 100;
    thirtypc = parseInt(thirtypc) + 'px';
    $("#tasks").css('height',thirtypc);
}

$(document).ready(function() {
    thirty_pc();
    $(window).bind('resize', thirty_pc);
});
	*/
	</script>
	
<?php
	if (!empty($_POST['addtask'])) 
		{	
			isset($_POST['priority']);
			isset($_POST['set_date']);
			$date = date("Y-m-d");
			
			if(!empty (mysql_real_escape_string($_POST['priority'])))
			{	
				$priority = mysql_real_escape_string($_POST['priority']);
			}
			if(!empty($_POST['set_date']))
			{	
				$now = $_POST['set_date'];
			}
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
	} else if(!empty (mysql_real_escape_string($_GET['next']))) {
		$next = mysql_real_escape_string($_GET['next']);
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
		
	/**
		*echo "tararam".$row['end_date']."<br />";
		*	echo $today;
		
		*if(empty($idtask2)) 
		*	{
		*		 echo $idtask2 = $row['idtask'];
		*		 die();
		*	}
	**/
	?>
	
	</a>
	<?php
	$idtask1 = $row['idtask'];
	}echo "</tr></table>";
?>
	</div>
	<?php
		if(!empty($row['idtask'])){
		$next1 = $idtask1 + 1;
		$sql = "SELECT * FROM todolist.task WHERE user = '$user' AND idtask = $next1;";
		$output = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($output);
		}
	?>
	<a class="NextButton" href="viewlogin.php?next=<?php echo $idtask1;?>" >
		Next
	</a>
	<?php
	?>
	
	<a class = 'Back_butt' href="viewlogin.php" >
		Back
	</a>
	
	<a href="taskreview.php" ><button class = "rotate" style="">Review All</button> </a>
</div>													
<script>
/*****************************out of order******************
function somefunction()
	{
		var html = encodeURIComponent($("#tasks").html());
		$.ajax({
		   url: "save.php",
		   data: "content="+html
		})
	}
*****************************out of order******************/
</script>
</body>
</html>