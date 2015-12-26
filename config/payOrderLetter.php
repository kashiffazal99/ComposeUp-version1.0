<?php
include "../config/connectDB.php";
error_reporting(0);
session_start();



$count = 1;
$che_num = addslashes($_POST['che_num']);
$bank_Account_num = $_POST['bank_Account'];
$date = addslashes($_POST['date']);
$total = $_POST['total_hidd'];






////////-------Finding - Account - Number - via - bank_Account_num ---------------- /////////

	$Query = "SELECT * FROM acT_Number WHERE addr = '$bank_Account_num'";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());
	if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	$Row = mysql_fetch_assoc($q_Result);
	
	$bank_name = $Row['bankName'];
	$account_number = $Row['bankAcNumber'];
	$account_Title = strtoupper($Row['bankAcTitle']);
	


////////-------Finding - Account - Number - via - bank_Account_num ---------------- /////////



$shipping_1 = strtoupper($_POST['shipping_1']);
$acTitle_1 = strtoupper($_POST['acTitle_1']);
$payAmount_1 = addslashes(number_format($_POST['payAmount_1']));



$shipping_2 = strtoupper($_POST['shipping_2']);
$acTitle_2 = strtoupper($_POST['acTitle_2']);
$payAmount_2 = addslashes(number_format($_POST['payAmount_2']));



$shipping_3 = strtoupper($_POST['shipping_3']);
$acTitle_3 = strtoupper($_POST['acTitle_3']);
$payAmount_3 = addslashes(number_format($_POST['payAmount_3']));



$shipping_4 = strtoupper($_POST['shipping_4']);
$acTitle_4 = strtoupper($_POST['acTitle_4']);
$payAmount_4 = addslashes(number_format($_POST['payAmount_4']));



$shipping_5 = strtoupper($_POST['shipping_5']);
$acTitle_5 = strtoupper($_POST['acTitle_5']);
$payAmount_5 = addslashes(number_format($_POST['payAmount_5']));



$shipping_6 = strtoupper($_POST['shipping_6']);
$acTitle_6 = strtoupper($_POST['acTitle_6']);
$payAmount_6 = addslashes(number_format($_POST['payAmount_6']));



$shipping_7 = strtoupper($_POST['shipping_7']);
$acTitle_7 = strtoupper($_POST['acTitle_7']);
$payAmount_7 = addslashes(number_format($_POST['payAmount_7']));



$shipping_8 = strtoupper($_POST['shipping_8']);
$acTitle_8 = strtoupper($_POST['acTitle_8']);
$payAmount_8 = addslashes(number_format($_POST['payAmount_8']));


$shipping_9 = strtoupper($_POST['shipping_9']);
$acTitle_9 = strtoupper($_POST['acTitle_9']);
$payAmount_9 = addslashes(number_format($_POST['payAmount_9']));


$shipping_10 = strtoupper($_POST['shipping_10']);
$acTitle_10 = strtoupper($_POST['acTitle_10']);
$payAmount_10 = addslashes(number_format($_POST['payAmount_10']));

/* if first Bank name and Check Number has empty value so, return to back */
if($date == ""){$_SESSION['Pay_Error'] = "date";echo "<script type='text/javascript'>window.location.href='../home.php#/payOrder';</script>";die();};
if($che_num == ""){$_SESSION['Pay_Error'] = "cheque";echo "<script type='text/javascript'>window.location.href='../home.php#/payOrder';</script>";die();};
if($bank_name == ""){$_SESSION['Pay_Error'] = "bank";echo "<script type='text/javascript'>window.location.href='../home.php#/payOrder';</script>";die();};
/* if first Bank name and Check Number has empty value so, return to back */


/* if first fields has empty value so, return to back */
if($shipping_1 == "select" or   $acTitle_1 == "select"  or   $payAmount_1 == ""){$_SESSION['Pay_Error'] = "empty";echo "<script type='text/javascript'>window.location.href='../home.php#/payOrder';</script>";die();};
/* if first fields has empty value so, return to back */



////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////

		//Query for Bank Address Table 
	$Query = "SELECT * FROM bankAddrFormat";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());
	if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	
	while($Row = mysql_fetch_assoc($q_Result)){	
		if($bank_name == $Row['bankName']){
			$bankAddr = $Row['bankAddr'];
			break;
		}
	}

	
	
	
////-------------checking For NIB Payorder----------////
	$k = strtoupper($bank_name);
	if(strpos($k,"NIB") !== false){
		echo "It's found";
		header("Location: nib_payorder.php?date=$date&bank=$bank_name&baddr=$bankAddr&cheNum=$che_num&total=$total
		&acNum=$account_number&accTitle=$account_Title
		&shipp1=$shipping_1&payTitle1=$acTitle_1&payAmount1=$payAmount_1
		&shipp2=$shipping_2&payTitle2=$acTitle_2&payAmount2=$payAmount_2
		&shipp3=$shipping_3&payTitle3=$acTitle_3&payAmount3=$payAmount_3
		&shipp4=$shipping_4&payTitle4=$acTitle_4&payAmount4=$payAmount_4
		&shipp5=$shipping_5&payTitle5=$acTitle_5&payAmount5=$payAmount_5
		&shipp6=$shipping_6&payTitle6=$acTitle_6&payAmount6=$payAmount_6
		&account_Title=$account_Title&account_number=$account_number
		");
		die();
	}
////------------------------------------------------////


	
	
?>



<html ng-app>
	<head>
		<title>Pay order Letter</title>
		<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../css/payOrderLetter_print.css" rel="stylesheet"/>	
		<script src="../lib/ang_mat/angular.min.js"></script>
		</head>
	<body>
<div id="wrapper">
		<br><br><br><br><br><br><br><br><br><br><br>


		<p style="border:0px solid red;text-align:right" >Date : <?php echo $date; ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

		<div id="bankShow">
		<?php echo strtoupper($bank_name)."<br/>".strtoupper($bankAddr); ?>
		</div>
	
		<br/><br/>
		<b><u>
		SUB: PAY ORDERS CHEQUE NO.<?php echo $che_num;?> RS.<?php echo $total?>/-<br>
		ACCOUNT NO. <?php echo $account_number ?> TITLE <?php echo $account_Title; ?>.
		</u></b>
		<br/><br/>
		Dear Sir,
		
		<p>PLEASE MAKE FOLLOWING PAY ORDERS.</p>
		
		<?php echo "1) &nbsp;".$shipping_1." A/C ".$acTitle_1."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_1.".00"; ?>
			
		<?php if(!($shipping_2 == "select" or $acTitle_2 == "select" or $payAmount_2 == "")){
					echo "<p></p> 2) &nbsp;".$shipping_2." A/C ".$acTitle_2."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_2.".00";
					$count ++;
					}
		?>
		
		<?php if(!($shipping_3 == "select" or $acTitle_3 == "select" or $payAmount_3 == "")){
					echo "<p></p> 3) &nbsp;".$shipping_3." A/C ".$acTitle_3."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_3.".00";
					$count ++;
					}
		?>
		
		<?php if(!($shipping_4 == "select" or $acTitle_4 == "select" or $payAmount_4 == "")){
					echo "<p></p> 4) &nbsp;".$shipping_4." A/C ".$acTitle_4."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_4.".00";
					$count ++;
					}
		?>
		
		<?php if(!($shipping_5 == "select" or $acTitle_5 == "select" or $payAmount_5 == "")){
					echo "<p></p> 5) &nbsp;".$shipping_5." A/C ".$acTitle_5."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_5.".00";
					$count ++;
					}
		?>
		
		<?php if(!($shipping_6 == "select" or $acTitle_6 == "select" or $payAmount_6 == "")){
					echo "<p></p> 6) &nbsp;".$shipping_6." A/C ".$acTitle_6."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_6.".00";
					$count ++;
					}
		?>
		
		<?php if(!($shipping_7 == "select" or $acTitle_7 == "select" or $payAmount_7 == "")){
					echo "<p></p> 7) &nbsp;".$shipping_7." A/C ".$acTitle_7."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_7.".00";
					$count ++;
					}
		?>
		
		<?php if(!($shipping_8 == "select" or $acTitle_8 == "select" or $payAmount_8 == "")){
					echo "<p></p> 8) &nbsp;".$shipping_8." A/C ".$acTitle_8."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_8.".00";
					$count ++;
					}
		?>
		
		<?php if(!($shipping_9 == "select" or $acTitle_9 == "select" or $payAmount_9 == "")){
					echo "<p></p> 9) &nbsp;".$shipping_9." A/C ".$acTitle_9."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_9.".00";
					$count ++;
					}
		?>		
		
		<?php if(!($shipping_10 == "select" or $acTitle_10 == "select" or $payAmount_10 == "")){
					echo "<p></p> 10) ".$shipping_10." A/C ".$acTitle_10."<br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$payAmount_10.".00";
					$count ++;
					}
		?>
		
		

		
		
		<br/><br/><br/>
		<br/><br/><br/>
		<b>FOR <?php echo $account_Title; ?></b>
</div>
	</body>
</html>
<?php
//----------------Storing Data in database--------------------------//
	//Query for Inserting Data in PayOrderCancellation Table
	$query = "INSERT INTO payOrderLetter(
				shipping_1,acTitle_1,payAmount_1,
				shipping_2,acTitle_2,payAmount_2,
				shipping_3,acTitle_3,payAmount_3,
				shipping_4,acTitle_4,payAmount_4,
				shipping_5,acTitle_5,payAmount_5,
				shipping_6,acTitle_6,payAmount_6,
				shipping_7,acTitle_7,payAmount_7,
				shipping_8,acTitle_8,payAmount_8,
				shipping_9,acTitle_9,payAmount_9,
				shipping_10,acTitle_10,payAmount_10,
				bankName,bankAddress,totalAmount,
				date,bankAcTitle,bankAcNum,cheque_num,count
			)
		VALUES(
				'$shipping_1','$acTitle_1','$payAmount_1',
				'$shipping_2','$acTitle_2','$payAmount_2',
				'$shipping_3','$acTitle_3','$payAmount_3',
				'$shipping_4','$acTitle_4','$payAmount_4',
				'$shipping_5','$acTitle_5','$payAmount_5',
				'$shipping_6','$acTitle_6','$payAmount_6',
				'$shipping_7','$acTitle_7','$payAmount_7',
				'$shipping_8','$acTitle_8','$payAmount_8',
				'$shipping_9','$acTitle_9','$payAmount_9',
				'$shipping_10','$acTitle_10','$payAmount_10',
				'$bank_name','$bankAddr','$total',
				'$date','$account_Title','$account_number','$che_num','$count'
			)";					
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
//----------------Storing Data in database--------------------------//


//------------------Updating Cheque Number------------------------//
$fp = fopen("../txt_files/chNum.txt","w");
	if(!$fp) die("Could not Create File");
	fwrite($fp, $che_num);
	fclose($fp);	
//------------------Updating Cheque Number------------------------//

?>

<script type="text/javascript">
window.print();
window.location.href='../home.php#/payOrder';
</script>

