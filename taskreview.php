<!DOCTYPE HTML>
<html>
<head>
<style>
	body background-color:
		{
			
		}
	
	.ToDo-lit 
	 {
		background: -webkit-radial-gradient(81% 58%, ellipse cover, rgba(8, 46, 143, 0.49) 40%, rgba(5, 102, 247, 0.9) 40%);
		color: #F00;
		-webkit-text-fill-color: transparent;
		-webkit-background-clip: text;
		font-size:28px;
		//font-family: Baumans;
		text-align: centre;
	}
	
	
	{
	/*
		background:-webkit-repeating-radial-gradient(69% 58%, ellipse cover, rgba(8, 46, 143, 0.49) 24%, rgba(5, 102, 247, 0.9) 35%);
		color: #F00;-webkit-text-fill-color: transparent;
		-webkit-background-clip: text;
		font-family: ABeeZee;
		font-size:85px;opacity: 0.74;
		background: -webkit-repeating-radial-gradient(69% 58%, ellipse cover, rgba(8, 46, 143, 0.49) 24%, rgba(5, 102, 247, 0.9) 35%);
		color: #F00;
		-webkit-text-fill-color: transparent;
		-webkit-background-clip: text;
		font-size:85px;
		font-family: ABeeZee;
		opacity: 0.74;
		*/
	}
	.TasksListDiv 
	{
		margin:0px;
		padding:0px;
		width:100%;
		box-shadow: 8px 8px 3px 2px #ACC9E8;
		border:1px solid #000000;
		
		-moz-border-radius-bottomleft:10px;
		-webkit-border-bottom-left-radius:10px;
		border-bottom-left-radius:10px;
		
		-moz-border-radius-bottomright:10px;
		-webkit-border-bottom-right-radius:10px;
		border-bottom-right-radius:10px;
		
		-moz-border-radius-topright:10px;
		-webkit-border-top-right-radius:10px;
		border-top-right-radius:10px;
		
		-moz-border-radius-topleft:10px;
		-webkit-border-top-left-radius:10px;
		border-top-left-radius:10px;
	}

	.TasksListDiv table
	{
		width:100%;
		height:100%;
		margin:0px;padding:0px;
	}
	.TasksListDiv tr:last-child td:last-child
	{
		-moz-border-radius-bottomright:10px;
		-webkit-border-bottom-right-radius:10px;
		border-bottom-right-radius:10px;
	}
	.TasksListDiv table tr:first-child td:first-child
	{
		-moz-border-radius-topleft:10px;
		-webkit-border-top-left-radius:10px;
		border-top-left-radius:10px;
	}
	.TasksListDiv table tr:first-child td:last-child 
	{
		-moz-border-radius-topright:10px;
		-webkit-border-top-right-radius:10px;
		border-top-right-radius:10px;
	}
	.TasksListDiv tr:last-child td:first-child
	{
		-moz-border-radius-bottomleft:10px;
		-webkit-border-bottom-left-radius:10px;
		border-bottom-left-radius:10px;
		
	}
	.TasksListDiv tr:hover td
	{
	  /*ideashi aqac iqneba rame, movifiqreb :)))*/	
	}
	.TasksListDiv tr:nth-child(odd)
	{
		background-color:#00A8EB; 
	}
	.TasksListDiv tr:nth-child(even) 
	{ 
		background-color:#407E82; 
	}
	.TasksListDiv td
	{
		vertical-align:middle;
		border:1px solid #000000;
		border-width:0px 1px 1px 0px;
		text-align:left;
		padding:9px;
		font-size:13px;
		font-family:Comic Sans MS;
		font-weight:normal;
		color: #C3FC8D;
	}
	.TasksListDiv tr:last-child td
	{
		border-width:0px 1px 0px 0px;
	}
	.TasksListDiv tr td:last-child
	{
		border-width:0px 0px 1px 0px;
	}
	.TasksListDiv tr:last-child td:last-child
	{
		border-width:0px 0px 0px 0px;
	}
	.TasksListDiv tr:first-child td
	{
		background:-o-linear-gradient(bottom, #2C04DE 5%, #88D8E3 100%);
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #2C04DE), color-stop(1, #88D8E3) );
		background:-moz-linear-gradient( center top, #2C04DE 5%, #88D8E3 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#2C04DE", endColorstr="#88D8E3");	
	   background: -o-linear-gradient(top,#2C04DE,#88D8E3);

		background-color:#2C04DE;
		border:0px solid #000000;
		text-align:center;
		border-width:0px 0px 1px 1px;
		font-size:16px;
		font-family:Comic Sans MS;
		font-weight:bold;
		color: #000000;
	}
	
	.TasksListDiv tr:first-child:hover td
	{
		background:-o-linear-gradient(bottom, #2C04DE 5%, #88D8E3 100%);
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #2C04DE), color-stop(1, #88D8E3) );
		background:-moz-linear-gradient( center top, #2C04DE 5%, #88D8E3 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#2C04DE", endColorstr="#88D8E3");	
	    background: -o-linear-gradient(top,#2C04DE,#88D8E3);

		background-color:#2C04DE;
	}
	.TasksListDiv tr:first-child td:first-child
	{
		border-width:0px 0px 1px 0px;
	}
	.TasksListDiv tr:first-child td:last-child
	{
		border-width:0px 0px 1px 1px;
	}
	.taskInput
		{
			width: 390px;
			height:60px;
			background-color: #1F3C9A;
			color: #49FF00;
			font-size: 15px;
			border-bottom-left-radius:12px;
			border-bottom-right-radius:12px;
			border-top-left-radius:12px;
			border-top-right-radius:12px;
		}

</style>
</head>
<body>
<h1 class = 'ToDo-lit'>ToDo-lit</h1>
<div class="TasksListDiv" >
				<a href = "viewlogin.php">Done Editing</a>
                <table  cellspacing="0">
                    <tr>
                        <td>
                            Lisot Of All My Tasks
                        </td>
                        <td>
                            Priority
                        </td>
                        <td>
                            Date
                        </td>
						 <td>
                            Update/Delete
                        </td>
                    </tr>
				<?php
				include 'connection.php';
					$sql="select * from task;";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($query))
					{
					if($row['priority']==1){$k="<img src=\"Images/justshouldremember.png\">";}
					if($row['priority']==2){$k="<img src=\"Images/normalyimportant.png\">";}
					if($row['priority']==3){$k="<img src=\"Images/veryimportant.png\">";}
					
					?>
						<form action="update.php" method="post">
					<tr >
                        <td title = "<?php echo $row['task'];?>" contenteditable='true' >
							<input class = 'taskInput' type="text" name="task" value="<?php echo $row['task'];?>">
						   
                        </td>
                        <td contenteditable='true' >
							<?php echo $k;?>
                            
                        </td>
                        <td contenteditable='true' >
							<input type="text" value="<?php echo $row['end_date'];?>">
                             
                        </td>
						<td contenteditable='true' >
                           <input type = "submit" value="Update">
						   <input type="hidden" name="idtask" value="<?php echo $row['idtask'];?>">
						<td contenteditable='true' >
						</form>
						<form action = 'delete.php' method = 'post'>
						   <input type="hidden" name="idtask" value="<?php echo $row['idtask'];?>">
                           <input type = "submit" value="Delete">
                        </td>
						</form>
                    </tr>
				<?php
					}
                 ?>   
                </table>
            </div>
            

<?php
	
	
?>


</body>
</html>