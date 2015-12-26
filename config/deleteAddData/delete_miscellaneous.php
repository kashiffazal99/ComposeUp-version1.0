<?php
 	include "../connectDB.php";
	//Start session to use Success or fail message at redirected page
	session_start();

	$type =  $_GET['type'];
	$id   =  $_GET['id'];
	
//Deleting Shipping Accounts	
if($type == "addShipping"){
	$Query = "DELETE FROM shipping WHERE Id LIKE '$id'";
	mysql_query($Query,$link) or die(mysql_error());

	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/miscellaneous');
}	
	
//Deleting Accounts Title for bank etc..
if($type == "actitle"){
	$Query = "DELETE FROM acTitle WHERE Id LIKE '$id'";
	mysql_query($Query,$link) or die(mysql_error());

	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/miscellaneous');
}

//Deleting Bank Detail & Address for bank etc..
if($type == "b_name_detail"){
	$Query = "DELETE FROM bankAddrFormat WHERE Id LIKE '$id'";
	mysql_query($Query,$link) or die(mysql_error());

	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/miscellaneous');
}	
	 
//Deleting Account Numbers and Title etc..
if($type == "acT_N"){
	$Query = "DELETE FROM acT_Number WHERE Id LIKE '$id'";
	mysql_query($Query,$link) or die(mysql_error());

	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/miscellaneous');
}	
	 
//Deleting Company Registration
if($type == "comp_reg"){
	$Query = "DELETE FROM com_reg WHERE Id LIKE '$id'";
	mysql_query($Query,$link) or die(mysql_error());

	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/miscellaneous');
}	
	
//Deleting Exporter_info
if($type == "exp_inf"){
	echo "as";
	$Query = "DELETE FROM exporter_info WHERE Id LIKE '$id'";
	mysql_query($Query,$link) or die(mysql_error());

	$_SESSION['check'] = "deleted";
	header('Location: ../../edit.php#/miscellaneous');
}	
	
	
?>
<script type="text/javascript">
//window.history.go(-1)
</script>

