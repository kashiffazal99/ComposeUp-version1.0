<?php
	include "connectDB.php";
	/*-------------------------------------------------------------------------------------------------------------------
	Sessions are made in 'login.php' page
	The values of session are already assigned in 'login.php' 
	---------------------------------------------------------------------------------------------------------------------*/
	session_start();
	
	//Query for select pass table and execute it.	
	$Query = "SELECT * FROM pass";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());

	//Check pass table for empty fields
	if(mysql_num_rows($q_Result) <= 0){die ("<h3><center>No record found</center></h3>");}
	
	//Getting value of pass table
	$Row = mysql_fetch_assoc($q_Result);
	
		//Checking Id & Pass from database by session to keep login or redirect.
		if($_SESSION['username'] == $Row['username'] and $_SESSION['password'] == $Row['pass']){
		}else{
			session_destroy();
			$_SESSION[] = array();
			header('Location: index.php?er=er');
		}
?>