<?php
include "../connectDB.php";

$id = $_GET['id'];


$Query = "SELECT * FROM payOrderLetter WHERE id=$id";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
$Row = mysql_fetch_assoc($q_Result);


?>

<html ng-app>
	<head>
		<title>Pay order Letter</title>
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../../css/payOrderLetter_print.css" rel="stylesheet"/>	
		</head>
	<body>
<div id="wrapper">

		<br><br><br><br><br><br><br><br><br><br><br>

		<p style="border:0px solid red;text-align:right" >Date : <?php echo $Row['date']; ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

		<div id="bankShow">
		<?php echo $Row['bankName']."<br/>".$Row['bankAddress']; ?>
		</div>
	
		<br/><br/>
		<b><u>
		SUB: PAY ORDERS CHEQUE NO.<?php echo $Row['cheque_num'];?> RS.<?php echo $Row['totalAmount']?>/-<br>
		ACCOUNT NO. <?php echo $Row['bankAcNum']; ?> TITLE <?php echo $Row['bankAcTitle']; ?>.
		</u></b>
		<br/><br/>
		Dear Sir,
		
		<p>PLEASE MAKE FOLLOWING PAY ORDERS.</p>
		
		<?php echo "1) &nbsp;&nbsp;".$Row['shipping_1']." A/C ".$Row['acTitle_1']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_1'].".00"; ?>
			
		<?php if(!($Row['payAmount_2'] == "")){
					echo "<p></p> 2) &nbsp;&nbsp;".$Row['shipping_2']." A/C ".$Row['acTitle_2']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_2'].".00";
				}
		?>
		
		<?php if(!($Row['payAmount_3'] == "")){
					echo "<p></p> 3) &nbsp;&nbsp;".$Row['shipping_3']." A/C ".$Row['acTitle_3']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_3'].".00";
					}
		?>
		
		<?php if(!($Row['payAmount_4'] == "")){
					echo "<p></p> 4) &nbsp;&nbsp;".$Row['shipping_4']." A/C ".$Row['acTitle_4']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_4'].".00";
					}
		?>
		
		<?php if(!($Row['payAmount_5'] == "")){
					echo "<p></p> 5) &nbsp;&nbsp;".$Row['shipping_5']." A/C ".$Row['acTitle_5']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_5'].".00";
					}
		?>
		
		<?php if(!($Row['payAmount_6'] == "")){
					echo "<p></p> 6) &nbsp;&nbsp;".$Row['shipping_6']." A/C ".$Row['acTitle_6']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_6'].".00";
					}
		?>
		
		<?php if(!($Row['payAmount_7'] == "")){
					echo "<p></p> 7) &nbsp;&nbsp;".$Row['shipping_7']." A/C ".$Row['acTitle_7']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_7'].".00";
					}
		?>
		
		<?php if(!($Row['payAmount_8'] == "")){
					echo "<p></p> 8) &nbsp;&nbsp;".$Row['shipping_8']." A/C ".$Row['acTitle_8']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_8'].".00";
					}
		?>
		
		<?php if(!($Row['payAmount_9'] == "")){
					echo "<p></p> 9) &nbsp;&nbsp;".$Row['shipping_9']." A/C ".$Row['acTitle_9']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_9'].".00";
					}
		?>		
		
		<?php if(!($Row['payAmount_10'] == "")){
					echo "<p></p> 10) ".$Row['shipping_10']." A/C ".$Row['acTitle_10']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs. ".$Row['payAmount_10'].".00";
					}
		?>
		
		
		<br/><br/><br/>
		<br/><br/><br/>
		<b>FOR <?php echo $Row['bankAcTitle']; ?></b>
</div>
	</body>
</html>