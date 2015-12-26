<?php
	
	
	include "../../config/connectDB.php";
	//Start session to use Success or fail message at redirected page
	session_start();
	
	$getRef = $_GET['ref'];

	$Query = "DELETE FROM payOrderCan WHERE Id LIKE '$getRef'";
	mysql_query($Query,$link) or die(mysql_error());
	
	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/payCancelEdit');
?>
<script type="text/javascript">
//window.history.go(-1)
</script>

