<?php
include "connectDB.php";
error_reporting(0);
session_start();

$company = $_POST['company'];
if($company == 'select'){$_SESSION['check'] = "company"; header('Location: ../home.php#/gstReturn');exit();}

//Getting Company Information ----------------------------
$Query = "SELECT * FROM com_reg WHERE com_name='$company'";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){/*echo "<b>No record found</b>";*/}
$Row = mysql_fetch_assoc($q_Result);
//------------------------------------------------------//

$exp_name = $_POST['exp_name'];
if($exp_name == 'select'){$_SESSION['check'] = "exp_n"; header('Location: ../home.php#/gstReturn');exit();}

//Getting Exporter Information ----------------------------
$Query = "SELECT * FROM exporter_info WHERE exp_name ='$exp_name'";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<b>No record found</b>";}
$Row2 = mysql_fetch_assoc($q_Result);
//------------------------------------------------------//

//Getting Last 10 records from GST Information ----------------------------
//Getting Maximum Id to Creating a range of 10 Records
$Query = "SELECT MAX(Id) FROM gst";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<b>No record found</b>";}
$Max_row = mysql_fetch_assoc($q_Result);
	//Maximum ID
$max = $Max_row['MAX(Id)'];
//------------------------------------------------------////------------------------------------------------------------//

//Getting 10 Records with Limit
$Query = "SELECT * FROM gst WHERE ComName='$company' ORDER BY Id DESC";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<b>No record found</b>";}
//------------------------------------------------------////------------------------------------------------------------//


$month = $_POST['month'];

$ship_bill = $_POST['ship_bill'];
$ship_date = $_POST['ship_date'];

$lc_no = $_POST['lc_no']. "<br/>";
$lc_date = $_POST['lc_date'];

$crn = $_POST['crn'];
$port = $_POST['port'];
if($port == 'select'){$_SESSION['check'] = "Port"; header('Location: ../home.php#/gstReturn');exit();}
$total_kgs = $_POST['total_kgs'];
$br = $_POST['br'];
$dr = $_POST['dr'];

	//Getting Insurance Value in amount or Percentage
	if($_POST['ins_box'] == 'yes'){ $ins_rate =  $_POST['ins_rate']."%";}else{	$ins_rate =  $_POST['ins_rate'];}
	//$company == 'select' ? header('Location: ../home.php#/gstReturn') : false;
	//$ins_rate;

	//Getting Landing Value in amount or Percentage
	if($_POST['lan_box'] == 'yes'){ $lan_rate =  $_POST['lan_rate']."%";}else{	$lan_rate =  $_POST['lan_rate'];}
	//echo $lan_rate . "<br>";

$cd_tax = $_POST['cd_tax'];	
$st_tax = $_POST['st_tax'];	
$ast_tax = $_POST['ast_tax'];	
$it_tax = $_POST['it_tax'];	
$lan_cost = $_POST['lan_cost'];	
$lan_cost = str_replace(",","",$lan_cost);

//echo $lan_cost;
	

	
	///All Calculation for Taxes
	 $cal_cd_tax = ($lan_cost*$cd_tax)/100;
	 $cal_st_tax = ($cal_cd_tax+$lan_cost)*$st_tax/100;
	 $cal_ast_tax = ($cal_cd_tax+$lan_cost)*$ast_tax/100;
	 $cal_it_tax = ($cal_cd_tax+$cal_st_tax+$cal_ast_tax+$lan_cost)*$it_tax/100;
	 $landed_ater_taxes = ($cal_cd_tax+$cal_st_tax+$cal_ast_tax+$cal_it_tax+$lan_cost);
	 $other_exp  = ($landed_ater_taxes*4)/100;
	 $average_Profit  = (($landed_ater_taxes+$other_exp)*2)/100;
	 
	 $landedIncAllTaxableAmou = $landed_ater_taxes + $other_exp + $average_Profit;
	 $salePerKg = number_format(($landed_ater_taxes + $other_exp + $average_Profit)/$total_kgs,2);

?>


<html>
	<head>
		<title>GST Return</title>
		<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../css/gst_print.css" rel="stylesheet" type="text/css"/>
		
	</head>
	<body>
	
	<header style="border:0px solid red;text-align:right;font-size:18px;">
	Ref # <?php echo ($max+1);?>	
	</header>
	
			<center>
			<h1>G.S.T RETURN</h1>
			<?php echo "<b><u>".$Row['com_name']."</u></b>";?>	<br/>
			<?php echo $Row['com_address_1']." ".$Row['com_address_2'];?> </br>
			For the month of  <?php echo "<b>".$month."</b>";?>
			</center>
			<br/>
			<br/>
		<table border="0" width="100%" cellspacing="0">		
			<tr>
				<th width="20%">GST Reg No.</th>
				<td width="30%"><?php echo $Row['com_gst_ger_no'];?></td>
				<th width="20%">Exporter Name:</th>
				<td width="30%"><?php echo $exp_name;?></td>
			</tr>
			<tr>
				<th>CNIC No.</th>
				<td><?php echo $Row['com_cnic'];?></td>
				<th>Exporter Origin:</th>
				<td><?php echo $Row2['exp_origin'];?></td>

			</tr>
			<tr>
				<th>NTN No.</th>
				<td><?php echo $Row['com_ntn'];?></th>
				<th>LC / Cont #</td>
				<td><?php echo $lc_no;?></td>			
			</tr>
			<tr>
				<th>Ship Bill #</th>
				<td><?php echo $ship_bill;?></td>
				<th>LC / Cont Date:</th>
				<td><?php echo $lc_date;?></td>
			</tr>			<tr>
				<th>Ship Bill Date</th>
				<td><?php echo $ship_date;?></td>
				<th></th>
				<td></td>
			</tr>
		</table>
		
		
		<hr>
		
		<table border="0" width="100%">
			<tr>
				<th width="20%">CRN No.</th>
				<td width="30%"><?php echo $crn;?></td>
				<th width="20%">Total WT</th>
				<td width="30%"><?php echo $total_kgs;?></td>
			</tr>
			<tr>
				<th>Date:</th>
				<td><?php echo $lc_date;?></td>
				<th>Total Sale Per Kgs</th>
				<td><?php echo $salePerKg;?></td>
			</tr>
			<tr>
				<th>Port</th>
				<td><?php echo $port;?></td>
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
				<td><?php echo $br;?></td>
				<td><?php echo ($dr*$total_kgs);?></td>
				<td><?php echo $ins_rate;?></td>
				<td><?php echo $lan_rate;?></td>
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
				<td width="20%" style="text-align:right;padding-right:20px;"><?php echo number_format($lan_cost,2);?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Custom Duty <?php echo $cd_tax."%";?></td>
				<td style="text-align:right;padding-right:20px;">
					<?php 
					number_format($cal_cd_tax,2) == 0 ? $cd = "-" : $cd = number_format($cal_cd_tax,2);	echo $cd;
					
					?>
				</td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Sale Tax  <?php echo $st_tax."%";?></td>
				<td style="text-align:right;padding-right:20px;"><?php number_format($cal_st_tax,2) == 0 ? $st = "-" : $st = number_format($cal_st_tax,2);echo $st;?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Additional Sale Tax <?php echo $ast_tax."%";?></td>
				<td style="text-align:right;padding-right:20px;"><?php number_format($cal_ast_tax,2) == 0 ? $ast = "-" : $ast = number_format($cal_ast_tax,2); echo $ast;?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Income Tax <?php echo $it_tax."%";?></td>
				<td style="text-align:right;padding-right:20px;"><b><?php echo number_format($cal_it_tax,2);?></b></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Other Expenses after Income Tax amount 4%</td>
				<td style="text-align:right;padding-right:20px;"><?php echo number_format($other_exp,2);?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;">Average Profit 2%</td>
				<td style="text-align:right;padding-right:20px;"><?php echo number_format($average_Profit,2);?></td>
			<tr>
			<tr>
				<td style="padding-left:10px;border-top:2px solid #999;">Average Sale</td>
				<td style="text-align:right;padding-right:20px;border-top:2px solid #999;border-bottom:2px double #666;"><b><?php echo number_format($landedIncAllTaxableAmou,2);?></b></td>
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

<?php
	//Add Account Title to Database --------------------------------- 

	//Query for Inserting Data in PayOrderCancellation Table
		
		$c_name = $Row['com_name'];
		$c_addr_1 = $Row['com_address_1'];
		$c_addr_2 = $Row['com_address_2'];
		$com_gst_ger_no = $Row['com_gst_ger_no'];
		$com_cnic = $Row['com_cnic'];
		$com_ntn = $Row['com_ntn'];
		$exp_origin = $Row2['exp_origin'];
		$dAmount = ($dr*$total_kgs);
		
		$query = "INSERT INTO gst(
			ComName,ComAdd1,ComAdd2,Month,
			GstRegNo,CNIC,NTN,ShipBill,ShipBillDate,
			ExpName,ExpOrg,LcCont,LcContDate,
			CRN,Date,Port,TWt,TSPK,
			ExcRate,DollAmount,InsCh,ShippCh,
			LandedCost,CD,CDAmo,ST,STAmo,AST,ASTAmo,IT,ITAmo,OE,AP,LandedAll 
			)
		VALUES(
			'$c_name','$c_addr_1','$c_addr_2','$month',
			'$com_gst_ger_no','$com_cnic','$com_ntn','$ship_bill','$ship_date',
			'$exp_name','$exp_origin','$lc_no','$lc_date',
			'$crn','$lc_date','$port','$total_kgs','$salePerKg',
			'$br','$dAmount','$ins_rate','$lan_rate',
			'$lan_cost','$cd_tax','$cal_cd_tax','$st_tax','$cal_st_tax','$ast_tax','$cal_ast_tax',
				'$it_tax','$cal_it_tax','$other_exp','$average_Profit','$landedIncAllTaxableAmou'
			)";		
		//Query for Inserting Data in PayOrderCancellation Table

		//Executing the query 
		if(mysql_query($query,$link)){
			$_SESSION['check'] = "success";
		}else{
			$_SESSION['check'] = "not";
		}	 
		//Executing the query 
	
//Add Account Title to Database --------------------------------- 

?>

<script type="text/javascript">
//window.print();
//window.location.href='../home.php#/gstReturn';
</script>