<?php
include "../connectDB.php";

$id = $_GET['id'];


$Query = "SELECT * FROM payOrderCan WHERE id=$id";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
$Row = mysql_fetch_assoc($q_Result);


?>

<html ng-app>
	<head>
		<title>Pay order cancellation</title>
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../../css/payOrderCancellation.css" rel="stylesheet"/>	
		</head>
	<body>
<div id="wrapper">
		<br><br><br><br><br><br><br><br><br>
		Date : <?php echo $Row['curr_date']; ?>
		<br/><br/>

		<div id="bankShow">
		<?php echo $Row['bank']."<br/>".$Row['bankAddr']; ?>
		</div>
	
		<br/><br/>
		<center><b><u>SUBJECT : CANCELLATION OF PAYORDER.</u></b></center>
		<br/><br/>
		Dear Sir,
		
		<p>ENCLOSED PLEASE FIND HEREWITH PAYORDER RS <?php echo $Row['amount']; ?>/- NO.<?php echo $Row['po_num']; ?> DATED <?php echo  $Row['po_date']; ?> IN FAVOUR OF <?php echo $Row['ship_line']; ?> A/C <?php echo $Row['ac_title']; ?> THE SAID PAY ORDER IS BEING RETURNED UNUTILISED BY THE PAYEE DULY ENDORSED. IT IS NOW REQUESTED YOU TO PLEASE CANCEL THE SAME AND CREDIT OUR ACCOUNT NO. <?php echo $Row['acNo']; ?>. </p>
		<br/>
		THANKING YOU,
		<br/>
		<br/>
		YOUR'S SINCERELY
		
		
		<br/><br/><br/>
		<br/><br/><br/>
		<b>FOR <?php echo $Row['bankAcTitle']; ?></b>
</div>
	</body>
</html>
