<?php
	include "connectDB.php";
	//Start session to use Success or fail message at redirected page
	session_start();
	
	$getRef = $_GET['ref'];

	$Query = "DELETE FROM custAddress WHERE Id LIKE '$getRef'";
	mysql_query($Query,$link) or die(mysql_error());
	
	$_SESSION['check'] = "deleted";
	header('Location: ../edit.php#/address');
?>
<script type="text/javascript">
//window.history.go(-1)
</script>

