<?php
	include "../connectDB.php";
	//Start session to use Success or fail message at redirected page
	session_start();
	$id   =  $_GET['id'];

	$Query = "DELETE FROM payOrderLetter WHERE Id LIKE '$id'";
	mysql_query($Query,$link) or die(mysql_error());

	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/payOrderLetterEdit');
?>