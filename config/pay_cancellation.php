<?php
	include "connectDB.php";
	//Start session to use Success or fail message at redirected page
	session_start();
$cDate = addslashes($_POST['cDate']);
$bank = $_POST['bank'];		//Taking the Abbreviation of Account Detail
$poDate = addslashes($_POST['poDate']);
$amount = addslashes(number_format($_POST['amount']));
$poNo = addslashes($_POST['poNo']);
$shipping = addslashes($_POST['shipping']);
$acTitle = addslashes($_POST['acTitle']);

if($bank == ""){echo "<script type='text/javascript'>window.history.go(-1)</script>";$_SESSION['check'] = "bank";exit();}
if($shipping == "select"){echo "<script type='text/javascript'>window.history.go(-1)</script>";$_SESSION['check'] = "ship";exit();}
if($acTitle == "select"){echo "<script type='text/javascript'>window.history.go(-1)</script>";$_SESSION['check'] = "actitle";exit();}

////////-------Finding - Account - Number - via - $Bank ---------------- /////////
	$Query = "SELECT * FROM acT_Number WHERE addr = '$bank'";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());
	if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	$Row = mysql_fetch_assoc($q_Result);
	
	$bank = $Row['bankName'];
	$acNo = $Row['bankAcNumber'];
	$BankAcTitle = strtoupper($Row['bankAcTitle']);
////////-------Finding - Account - Number - via - $Bank ---------------- /////////


	
		//Query for Bank Address Table 
	$Query = "SELECT * FROM bankAddrFormat";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());
	if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	
	while($Row = mysql_fetch_assoc($q_Result)){	
		if($bank == $Row['bankName']){
			$bankAddr = $Row['bankAddr'];
			break;
		}
	}


			
	//Query for Inserting Data in PayOrderCancellation Table
	$query = "INSERT INTO payOrderCan(curr_date,bank,bankAddr,po_date,amount,po_num,ship_line,acNo,ac_title,bankAcTitle)
	VALUES('$cDate','$bank','$bankAddr','$poDate','$amount','$poNo','$shipping','$acNo','$acTitle','$BankAcTitle')";					
	//Query for Inserting Data in PayOrderCancellation Table
	
	//Executing the query 
	if(mysql_query($query,$link)){
		$_SESSION['check'] = "PCsuccess";
		//header('Location: ../home.php#/pay_cancel');
		//echo "Data saved";
	}else{
		//echo "could not be saved";
		$_SESSION['check'] = "PCnot";
		//header('Location: ../home.php#/pay_cancel');
		mysql_error();
	}	 
	//Executing the query 


	


	

?>

<html ng-app>
	<head>
		<title>Pay order cancellation</title>
		<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../css/payOrderCancellation.css" rel="stylesheet"/>	
		<script src="../lib/ang_mat/angular.min.js"></script>
		</head>
	<body>
<div id="wrapper">
		<br><br><br><br><br><br><br><br><br><br><br>
		Date : <?php echo $cDate; ?>
		<br/><br/>

		<div id="bankShow">
		<?php echo $bank."<br/>".$bankAddr; ?>
		</div>
	
		<br/><br/>
		<center><b><u>SUBJECT : CANCELLATION OF PAYORDER.</u></b></center>
		<br/><br/>
		Dear Sir,
		
		<p>ENCLOSED PLEASE FIND HEREWITH PAYORDER RS <?php echo $amount; ?>/- NO.<?php echo $poNo; ?> DATED <?php echo  $poDate; ?> IN FAVOUR OF <?php echo $shipping; ?> A/C <?php echo $acTitle; ?> THE SAID PAY ORDER IS BEING RETURNED UNUTILISED BY THE PAYEE DULY ENDORSED. IT IS NOW REQUESTED YOU TO PLEASE CANCEL THE SAME AND CREDIT OUR ACCOUNT NO. <?php echo $acNo; ?>. </p>
		<br/>
		THANKING YOU,
		<br/>
		<br/>
		YOUR'S SINCERELY
		
		
		<br/><br/><br/>
		<br/><br/><br/>
		<b>FOR <?php echo $BankAcTitle; ?></b>
</div>
	</body>
</html>

<script type="text/javascript">
window.print();
window.location.href='../home.php#/pay_cancel';
</script>