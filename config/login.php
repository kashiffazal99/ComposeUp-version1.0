<?php
	//Connection to DB
	include "connectDB.php";
	
	//Getting values from submission
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$reme = $_POST['remember'];

	//Storing values in Id & pass Session	
	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['password'] = $pass;
	
	//Query for select pass table and execute it.	
	$Query = "SELECT * FROM pass";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());

	//Check pass table for empty fields
	if(mysql_num_rows($q_Result) <= 0){die ("<h3><center>No record found</center></h3>");}
	
	//Getting value of pass table
	$Row = mysql_fetch_assoc($q_Result);

	//Checking Id & Pass from database by session
	if($_SESSION['username'] == $Row['username'] and $_SESSION['password'] == $Row['pass']){
		$_SESSION['roll'] = $Row['roll'];
		$_SESSION['login'] = true;
		header('Location: ../home.php');
		//echo "<b><br><br>Login success</b>";
	}else{
		session_destroy();
		$_SESSION[] = array();
		header('Location: ../index.php?er=er');
		//echo "<b><br><br>Login fail</b>";
}


?>