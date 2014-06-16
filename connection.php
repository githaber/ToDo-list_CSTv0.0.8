<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</html>
<?php
	$conn = mysqli_connect("localhost","root","","todolist");
	if(!$conn)
		{
			echo "Can't accsess to the database";
			die();
		}
	mysqli_set_charset($conn,"utf8");

	//mysql_query("SET NAMES UTF8");
	//$conn = mysql_connect($argHost, $argUsername, $argPassword);
	//mysql_query("SET character_set_results=utf8", $conn);
	//mb_language('uni'); 
	//mb_internal_encoding('UTF-8');
	//mysql_select_db($argDB, $conn);
    //mysql_query("set names 'utf8'",$conn);
?>