<?php

	 $date = $_GET['date'];
	 $bank = $_GET['bank'];
	 $baddr = $_GET['baddr'];
	 $account_number = $_GET['account_number'];
	
	str_replace("Karachi","",$baddr);
	
	 $cheNum = $_GET['cheNum'];
	 $total = $_GET['total'];
	 $accTitle = $_GET['accTitle'];
	 
		

	///----------Date-Spiting---------///
	$date_d_1 = substr($date,0,1);
	$date_d_2 = substr($date,1,1);
	$date_m_1 = substr($date,3,1);
	$date_m_2 = substr($date,4,1);
	$date_y_1 = substr($date,6,1);
	$date_y_2 = substr($date,7,1);
	$date_y_3 = substr($date,8,1);
	$date_y_4 = substr($date,9,1);
	///----------Date-Spiting---------///
	
	$shipp1 = $_GET['shipp1'];
	$shipp2 = $_GET['shipp2'];
	$shipp3 = $_GET['shipp3'];
	$shipp4 = $_GET['shipp4'];
	$shipp5 = $_GET['shipp5'];
	$shipp6 = $_GET['shipp6'];
	
	$payTitle1 = $_GET['payTitle1'];
	$payTitle2 = $_GET['payTitle2'];
	$payTitle3 = $_GET['payTitle3'];
	$payTitle4 = $_GET['payTitle4'];
	$payTitle5 = $_GET['payTitle5'];
	$payTitle6 = $_GET['payTitle6'];
	
	$payAmount1 = $_GET['payAmount1'];
	$payAmount2 = $_GET['payAmount2'];
	$payAmount3 = $_GET['payAmount3'];
	$payAmount4 = $_GET['payAmount4'];
	$payAmount5 = $_GET['payAmount5'];
	$payAmount6 = $_GET['payAmount6'];
	
	
?>
<html>
<head>
		<title>Pay order NIB</title>
		<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../css/nibPayorder.css" rel="stylesheet"/>	
		<script src='../js/num.js' type='text/javascript'></script>
		</head>
<body onload="get(<?php echo str_replace(",","",$total); ?>);">
<div id="wrapper">

<table border="0" width="100%" style="margin-top:40px;">
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Main Branch
			<div style="float:right;">
				<?php echo $date_d_1; ?> 
				&nbsp;&nbsp; 
				<?php echo $date_d_2; ?> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<?php echo $date_m_1; ?> 
				&nbsp;&nbsp; 
				<?php echo $date_m_2; ?> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<?php echo $date_y_3; ?> 
				&nbsp;&nbsp; 
				<?php echo $date_y_4; ?> 
				&nbsp; 
			</div>
		</td>
	</tr>
	<tr>
		<td height="90px" valign="top">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="../img/tick.png" width="10px;" style="margin-top:55px;">
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="../img/tick.png" width="10px;" style="margin-top:55px;">
		</td>
	</tr>
	<tr>
		<td height="116px" valign="top">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Karachi
			<br/><br/><br/>
			<div style="margin-top:-2px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="../img/tick.png" width="10px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $account_number; ?>
			</div>
			
			<div style="margin-top:5px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="../img/tick.png" width="10px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $cheNum; ?>
			
			</div>
			
			<div style="margin-top:5px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span style="font-size:10px;">
				<textarea id='word' ></textarea>
			</span>
			<span style="float:right">
				<?php echo "<b>=".trim($total)."=</b>";?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
			</div>
			
		</td>
	</tr>
</table>
<!------------------------------------------------------------------------------------------->
<!---------------------------------------PayOrders List-------------------------------------->
<!------------------------------------------------------------------------------------------->	

<div style="margin-top:25px;">
	<table class="payTable" border="0" width="100%">
		<tr>
			<td style="font-size:10px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo $shipp1 ." A/C ". $payTitle1 .","?>
			</td>
			<td style="font-size:10px;padding:0px auto;">
				<b><?php echo "Rs.".trim($payAmount1).".00";?></b>
				&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
		<tr>
			<td style="font-size:10px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php 
				if(!($shipp2 == "SELECT" or $payTitle2 == "SELECT")){
				echo $shipp2 ." A/C ". $payTitle2 .",";
				}
				?>
			</td>
			<td style="font-size:10px;padding:0px auto;">
				<b><?php 
				if(!($payAmount2 == " ")){
				echo "Rs.".trim($payAmount2).".00";
				}
				?></b>
				&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
		<tr>
			<td style="font-size:10px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php 
				if(!($shipp3 == "SELECT" or $payTitle3 == "SELECT")){
				echo $shipp3 ." A/C ". $payTitle3 .",";
				}
				?>
			</td>
			<td style="font-size:10px;padding:0px auto;">
				<b><?php
				if(!($payAmount3 == " ")){
				echo "Rs.".trim($payAmount3).".00";
				}
				?></b>
				&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
		<tr>
			<td style="font-size:10px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php 
				if(!($shipp4 == "SELECT" or $payTitle4 == "SELECT")){
				echo $shipp4 ." A/C ". $payTitle4 .",";
				}
				?>
			</td>
			<td style="font-size:10px;padding:0px auto;">
				<b><?php 
				if(!($payAmount4 == " ")){
				echo "Rs.".trim($payAmount4).".00";
				}
				?></b>
				&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
		<tr>
			<td style="font-size:10px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php 
				if(!($shipp5 == "SELECT" or $payTitle5 == "SELECT")){
				echo $shipp5 ." A/C ". $payTitle5 .",";
				}
				?>
			</td>
			<td style="font-size:10px;padding:0px auto;">
				<b><?php 
				if(!($payAmount5 == " ")){
				echo "Rs.".trim($payAmount5).".00";
				}
				?></b>
				&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
		<tr>
			<td style="font-size:10px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php 
				if(!($shipp6 == "SELECT" or $payTitle6 == "SELECT")){
				echo $shipp6 ." A/C ". $payTitle6 .",";
				}
				?>
			</td>
			<td style="font-size:10px;padding:0px auto;">
				<b><?php 
				if(!($payAmount6 == " ")){
				echo "Rs.".trim($payAmount6).".00";
				}
				?></b>
				&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
	</table>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
<table>
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $accTitle; ?>
			
			<div style="margin-top:8px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Karachi</div>

			<br/><br/><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			For Import Purpose

		</td>
	</tr>
</table>

</div>
</body>
</html>
