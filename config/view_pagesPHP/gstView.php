<?php
error_reporting(0);
include "../connectDB.php";
$id = $_GET['id'];
$Query = "SELECT * FROM gst WHERE id=$id";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
$Row = mysql_fetch_assoc($q_Result);



//Getting Last 10 records from GST Information ----------------------------
$Query = "SELECT * FROM gst ORDER BY Id DESC";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<b>No record found</b>";}
//------------------------------------------------------////------------------------------------------------------------//



?>

<html>
	<head>
		<title>GST Return</title>
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../../css/gst_print.css" rel="stylesheet" type="text/css"/>
		
	</head>
	<body>
	
	<header style="border:0px solid red;text-align:right;font-size:18px;">
	Ref # <?php echo $Row['Id'];?>	
	</header>
	
			<center>
			<h1>G.S.T RETURN</h1>
			<?php echo "<b><u>".$Row['ComName']."</u></b>";?>	<br/>
			<?php echo $Row['ComAdd1']." ".$Row['ComAdd2'];?> </br>
			For the month of  <?php echo "<b>".$Row['Month']."</b>";?>
			</center>
			<br/>
			<br/>
		<table border="0" width="100%" cellspacing="0">		
			<tr>
				<th width="20%">GST Reg No.</th>
				<td width="30%"><?php echo $Row['GstRegNo'];?></td>
				<th width="20%">Exporter Name:</th>
				<td width="30%"><?php echo $Row['ExpName'];?></td>
			</tr>
			<tr>
				<th>CNIC No.</th>
				<td><?php echo $Row['CNIC'];?></td>
				<th>Exporter Origin:</th>
				<td><?php echo $Row['ExpOrg'];?></td>

			</tr>
			<tr>
				<th>NTN No.</th>
				<td><?php echo $Row['NTN'];?></th>
				<th>LC / Cont #</td>
				<td><?php echo $Row['LcCont'];?></td>			
			</tr>
			<tr>
				<th>Ship Bill #</th>
				<td><?php echo $Row['ShipBill'];?></td>
				<th>LC / Cont Date:</th>
				<td><?php echo $Row['LcContDate'];?></td>
			</tr>			<tr>
				<th>Ship Bill Date</th>
				<td><?php echo $Row['ShipBillDate'];?></td>
				<th></th>
				<td></td>
			</tr>
		</table>
		
		
		<hr>
		
		<table border="0" width="100%">
			<tr>
				<th width="20%">CRN No.</th>
				<td width="30%"><?php echo $Row['CRN'];?></td>
				<th width="20%">Total WT</th>
				<td width="30%"><?php echo $Row['TWt'];?></td>
			</tr>
			<tr>
				<th>Date:</th>
				<td><?php echo $Row['Date'];?></td>
				<th>Total Sale Per Kgs</th>
				<td><?php echo $Row['TSPK'];?></td>
			</tr>
			<tr>
				<th>Port</th>
				<td><?php echo $Row['Port'];?></td>
				<th></th>
				<td></td>
			</tr>
		</table>
		
		
		<hr/>
		
		<table border="1" class="th_color" width="100%">
			<tr align="center" class="th_color">
				<th width="25%">Exchange Rate</th>
				<th width="25%">Dollar Amount</th>
				<th width="25%">Insurance Charges</th>
				<th width="25%">Shipping Charges</th>
			</tr>
			<tr align="center">
				<td><?php echo $Row['ExcRate'];?></td>
				<td><?php echo $Row['DollAmount'];?></td>
				<td><?php echo $Row['InsCh'];?></td>
				<td><?php echo $Row['ShippCh'];?></td>
			</tr>
		</table>
		
		<hr/>
		
		<table border="1" width="70%" align="center">
			<tr class="th_color">
				<th style="height:30px;">Particular</th>
				<th>As per Bill of Entry</th>
			<tr>
			<tr>
				<td width="50%" style="padding-left:10px;">Landed Cost (Insurance + Landing Charges)</td>
				<td width="20%" style="text-align:right;padding-right:20px;"><?php echo number_format($Row['LandedCost']);?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Custom Duty <?php echo $Row['CD'];?>%</td>
				<td style="text-align:right;padding-right:20px;">
					<?php 
					$cd = number_format($Row['CDAmo']);
					$cd == 0 ? $cd = "-" : false;
					echo $cd;
					?>
				</td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Sale Tax  <?php echo $Row['ST'];?>%</td>
				<td style="text-align:right;padding-right:20px;">
					<?php 
					$st = number_format($Row['STAmo']);
					$st == 0 ? $st = "-" : false; 
					echo $st;
					?>
				</td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Additional Sale Tax <?php echo $Row['AST'];?>%</td>
				<td style="text-align:right;padding-right:20px;">
					<?php 
					$ast = number_format($Row['ASTAmo']);
					$ast == 0 ? $ast = "-" : false;
					echo $ast;
					?>
				</td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Income Tax <?php echo $Row['IT'];?>%</td>
				<td style="text-align:right;padding-right:20px;"><b>
				<?php echo number_format($Row['ITAmo']);?></b></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Other Expenses after Income Tax amount 4%</td>
				<td style="text-align:right;padding-right:20px;"><?php echo number_format($Row['OE']);?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Average Profit 2%</td>
				<td style="text-align:right;padding-right:20px;"><?php echo number_format($Row['AP']);?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;border-top:2px solid #999;">Average Sale</td>
				<td style="text-align:right;padding-right:20px;border-top:2px solid #999;border-bottom:2px double #666;"><b><?php echo number_format($Row['LandedAll']);?></b></td>
			<tr>
		</table>
		
		<br/>
		
		<hr/>
		<h3 align="center"><u>SUMMARY OF LAST TEN RECORDS</u></h3>
		<table border='1' width='70%' align='center'>
			<tr class='th_color'>
				<th style='height:30px;'>Ref #</th>
				<th>Month</th>
				<th>Landed Cost</th>
				<th>Sale</th>
			</tr>
	<?php
	$total_LC = 0;
	$total_LA = 0;
		//Getting Last 10 records from While loop
		$count = 0;
while($Row3 = mysql_fetch_assoc($q_Result)){
	echo "
		<tr>
			<td align='center'>".$Row3['Id']."</td>
			<td align='center'>".$Row3['Month']."</td>
			<td align='center'>".number_format($Row3['LandedCost'],2)."</td>
			<td align='center'>".number_format($Row3['LandedAll'],2)."</td>
		</tr>
	";
	$total_LC = $total_LC + $Row3['LandedCost'];
	$total_LA = $total_LA + $Row3['LandedAll'];
	$count = $count + 1;
	if($count == 10){break;}
}
///---------------------------------------//////---------------------------------------//
?>
		<tr>
			<td colspan="2" align='center'><font size="4px"><b>Total</b></font></td>
			<td align='center'><font size="3px"><b><?php echo number_format($total_LC,2);?></font></b></td>
			<td align='center'><font size="3px"><b><?php echo number_format($total_LA,2);?></b></font></td>
		</tr>
</table>

		
		
	</body>
</html>
