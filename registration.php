<!DOCTYPE HTML>
	<?php
	if(session_status() == PHP_SESSION_NONE){
		session_start();
	}
	
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
	$nickname = mysql_real_escape_string($_POST['nickname']);
	$firstname = mysql_real_escape_string($_POST['firstname']);
	$secondname = mysql_real_escape_string($_POST['secondname']);
	$password = $_POST['password'];
	$verifypassword = mysql_real_escape_string($_POST['checkpassword']);
	$email = mysql_real_escape_string($_POST['email']);
	$date = mysql_real_escape_string($_POST['date']);		
	$hesh = SHA1($password);
	include 'connection.php';
	$sql = "SELECT * FROM information WHERE nickname = '$nickname'";
	$out = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($out);
	if ($row['nickname'] != "")
		{
			$_SESSION['reg_error'] = "User with such Nick Name already exists!";
			include "index.php";
			die();
		}
	
	if(strlen($password) < 8){	
		include "index.php";
		echo "<h4 style = 'position:absolute; top: 150px; right:340px; background-color: red; color:black;'>"."short password"."</h5>";
		die();
	}
	//include the link which contains the needed script for connection;
	$password = mysql_real_escape_string($_POST['password']);
	include 'connection.php';
	if (!$conn)
		{
			die("");
		}
	$year = DATE('Y');
	if ($year > 2014 && $year < 1900)
		{
			die('Enter Valid Date');
		}
	if (mysql_real_escape_string($_POST['password']) != mysql_real_escape_string($_POST['checkpassword']))
		{
			include 'firstpage.html';
			echo "<h5 style = 'position: absolute; top: 215px; right:310px; color: red;'>"."Invalid Password =>"."</h5>";
			die();
		}
		
	//
	$output = 'SELECT * FROM todolist.information;';
	
	$sql = "INSERT INTO information(nickname, firstname, secondname, password, email,date)
	values('$nickname', '$firstname','$secondname','$hesh','$email','$date')";
	$input = mysqli_query($conn,$sql);
	
	//as I am good programmer i just prefer to close my connection when query is done;
	mysqli_close($conn);
	
	//as soon as connection closed user automatically went to the first page;
	include 'firstpage.html';
	//notification, that user registerd;
	echo "<h3 style = 'position: absolute; left: 380px; color: green;'>"."Congratulations! registration went succsessfuly. Now you are Member Of Our team ;)"."</h3>";
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
