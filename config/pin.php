<html>
	<head>
  <!---Includes sweet Alerts-->
  <!--link rel="stylesheet" href="lib/sweet-alert/alert_lib/example.css"-->
  <script src="../lib/sweet-alert/alert_lib/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="../lib/sweet-alert/alert_lib/sweet-alert.css">
  <!---Includes sweet Alerts-->

	</head>
	
</html>
<?php
error_reporting(0);

if($_GET['er'] == 'er'){
	echo "<script>
		swal('PIN Required', 'You need a PIN Code to edit data.', 'error');
		setTimeout(function(){ window.location.href='../home.php'; }, 1500);
		</script>";
	exit();
} 


session_start();

//Getting PIN Code from TXT file
$fp = fopen("../txt_files/dot.txt","r");
	if(!$fp) die("Could not Create File");
	$pin = (int) fgets($fp,10);
	fclose($fp);
	
	
	$pinPost = $_POST['PIN'];
	
	
	if($pinPost == $pin){
		$_SESSION['log'] = "login";
		echo "<script>
		swal('Login Successfully!', 'You\'r going to redirect at Administrative area in a moment', 'success');
		setTimeout(function(){ window.location.href='../edit.php'; }, 1500);</script>";
	}else if($pinPost == 'remove'){
		$_SESSION['log'] = "pinRemove";
		echo "<script>
		swal('Remove', 'You\'r PIN Code has been removed', 'success');
		setTimeout(function(){ window.location.href='../home.php'; }, 1500);</script>";
	}else{
		$_SESSION['log'] = "logout";
		echo "<script>
		swal('Invalid', 'Please Enter a Valid PIN Code', 'error');
		setTimeout(function(){ window.location.href='../home.php'; }, 1500);</script>";
	}
?>