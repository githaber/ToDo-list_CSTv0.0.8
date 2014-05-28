<!DOCTYPE HTML>
	<?php
	
	// checking if there is something empty, which must not be empty; 
	if (!empty($_POST['nickname']) && 
		!empty($_POST['firstname']) && 
		!empty($_POST['secondname']) && 
		!empty($_POST['password']) && 
		!empty($_POST['checkpassword']) && 
		!empty($_POST['email']) && 
		!empty($_POST['date']))
			{
	
	?>

<?php	
	
	// defending myself from potential sqlinjection;
	$nickname = mysql_real_escape_string( $_POST['nickname']);
	$firstname = mysql_real_escape_string ($_POST['firstname']);
	$secondname = mysql_real_escape_string ($_POST['secondname']);
	$password = mysql_real_escape_string ($_POST['password']);
	$verifypassword = mysql_real_escape_string ($_POST['checkpassword']);
	$email = mysql_real_escape_string ($_POST['email']);
	$date = mysql_real_escape_string ($_POST['date']);		
	
	//include the link which contains the needed script for connection;
	include 'connection.php';
	if (!$conn)
		{
			die("");
		}
	
	//include the link which contains the needed script for connection;
	include 'connection.php';
	if (!$conn)
		{
			die("");
		}
	
	//
	$output = 'SELECT * FROM todolist.information;';
	
	$sql = "INSERT INTO information(nickname, firstname, secondname, password, email,date)
	values('$nickname', '$firstname','$secondname','$password','$email','$date')";
	$input = mysqli_query($conn,$sql);
	
	//as I am good programmer i just prefer to close my connection when query is done;
	mysqli_close($conn);
	
	//as soon as connection closed user automatically went to the first page;
	include 'firstpage.html';
	die();
?>

<?php
	// if something is empty stay there, on the first page. so I include there first page.
		}
		else
		{
			include "firstpage.html";
		}
	
	?>
