<?php
	
	
	include "../../config/connectDB.php";
	//Start session to use Success or fail message at redirected page
	session_start();
	
	$getRef = $_GET['id'];

	$Query = "DELETE FROM gst WHERE Id LIKE '$getRef'";
	mysql_query($Query,$link) or die(mysql_error());
	
	$_SESSION['check'] = "deleted";
	//echo "Delete Success";
	header('Location: ../../edit.php#/gstEdit');
	
	
?>
<script type="text/javascript">
//window.history.go(-1)
</script>

