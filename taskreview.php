<!DOCTYPE HTML>
<?php
	if(session_status()==PHP_SESSION_NONE){
		session_start();
	}
?>
<html>
<head>
	<link rel = 'stylesheet' type = 'text/css' href = 'taskreview.css'></link>
	<link rel="shortcut icon" href="Images/ToDo-list.png"></link>
</head>
<body>
<h1 class = 'ToDo-lit'>ToDo-list</h1>
<a href = "viewlogin.php">Done Editing</a>
<div class="TasksListDiv" >
    <table  cellspacing="0">
        <tr>
            <td>
                Lisot Of All My Tasks
            </td>
            <td>
                Priority
            </td>
            <td>
                Due Date
            </td>
			<td>
				Update/Delete
            </td>
		</tr>       
				
			<?php	
				include 'connection.php';
				//$l = $_SESSION['user'];
				$t = $_SESSION['user'];
				$sql="select * from task WHERE user = '$t'";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($query))
					{
						if($row['priority']==1){$priority="<img src=\"Images/justshouldremember.png\">";}
						if($row['priority']==2){$priority="<img src=\"Images/normalyimportant.png\">";}
						if($row['priority']==3){$priority="<img src=\"Images/veryimportant.png\">";}
					
			?>
						
			<form action="update.php" method="post">
				<tr >
                    <td title = "<?php echo $row['task'];?>" contenteditable='true' >
						<textarea  id = 'task_review_textarea' class = 'taskInput' type="text" name="task" >
							<?php echo $row['task'];?>
						</textarea>
						   
                    </td>
                    <td contenteditable='false' >
						<?php echo $priority;?>    
                    </td>
                    <td contenteditable='false' >
						<input type="text" value="<?php echo $row['end_date'];?>">       
                    </td>
					<td contenteditable='false' >
                        <input id = "update_butt" type = "submit" value="Update">
						<input type="hidden" name="idtask" value="<?php echo $row['idtask'];?>">
			</form>
			
			<form action = 'delete.php' method = 'post'>
				<input type="hidden" name="idtask" value="<?php echo $row['idtask'];?>">
                <input id = "delete_butt" type = "submit" value="Delete">
			</form>
                </tr>
				<?php
					}
                 ?>   
    </table>        
</div>
<script>
function elementSupportsAttribute(element, attribute) {
  var test = document.createElement(element);
  if (attribute in test) {
    return true;
  } else {
    return false;
  }
};
if (!elementSupportsAttribute('textarea', 'placeholder')) {
  // Fallback for browsers that don't support HTML5 placeholder attribute
  $("#task_review_textarea")
    .data("originalText", $("#task_review_textarea").text())
    .css("color", "#999")
    .focus(function() {
        var $el = $(this);
        if (this.value == $el.data("originalText")) {
          this.value = "";
        }
    })
    .blur(function() {
      if (this.value == "") {
          this.value = $(this).data("originalText");
      }
    });
} else {
  // Browser does support HTML5 placeholder attribute, so use it.
  $("#task_review_textarea")
    .attr("placeholder", $("#task_review_textarea").text())
    .text("");
}
</script>
</body>
</html>