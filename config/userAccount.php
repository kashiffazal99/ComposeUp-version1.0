<html>
	<head>
		<!---Includes sweet Alerts-->
  <!--link rel="stylesheet" href="lib/sweet-alert/alert_lib/example.css"-->
  <script src="../lib/sweet-alert/alert_lib/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="../lib/sweet-alert/alert_lib/sweet-alert.css">
  <!---Includes sweet Alerts-->

	</head>
	<body>
		<?php
include "connectDB.php";
session_start();
	
	 $cuser = $_POST['cuser'];
	 $nuser = $_POST['nuser'];
	
	 $cpass = $_POST['cpass'];
	 $npass = $_POST['npass'];
	
	 $cpin = $_POST['cpin'];
	 $npin = $_POST['npin'];
	
	
					//-------------Getting PIN Code from Text file----------------//
					$fp = fopen("../txt_files/dot.txt","r");
					if(!$fp) die("File could not be searched");
					$chN = (int) fgets($fp,10);
					fclose($fp);
					//-------------Getting PIN Code from Text file----------------//
	
	
	//Query for select pass table and execute it.	
	$Query = "SELECT * FROM pass";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());

	//Check pass table for empty fields
	if(mysql_num_rows($q_Result) <= 0){die ("<h3><center>No record found</center></h3>");}
	
	//Getting value of pass table
	$Row = mysql_fetch_assoc($q_Result);
	
	
	
	
	
		//Checking Id & Pass from database by session to keep login or redirect.
			if($cuser == $Row['username'] and $cpass == $Row['pass'] and $cpin == $chN){
				$Query = "UPDATE pass SET username = '$nuser', pass  = '$npass'";
				$q_Result = mysql_query($Query,$link) or die(mysql_error());

					//-----------------------------------------PIN Code Changing------------------------------------//
					//------------------Updating Cheque Number------------------------//
						$fp = fopen("../txt_files/dot.txt","w");
							if(!$fp) die("Could not Create File");
							fwrite($fp, $npin);
							fclose($fp);	
						//------------------Updating Cheque Number------------------------//
					//-----------------------------------------PIN Code Changing------------------------------------//
				echo "<script>swal('Change Success', 'User name, Password and PIN Code has been changed!', 'success');</script>";
				session_destroy();
				$_SESSION[] = array();
				header( "Refresh:5; url=../index.php?er=er", true, 303);
			}else{
				$_SESSION['check'] = 'invalid';
				header('Location: ../edit.php#/userAccount');
			}
		//Checking Id & Pass from database by session to keep login or redirect.
		
		
	
		
	
	
	

?>

	</body>
</html>

