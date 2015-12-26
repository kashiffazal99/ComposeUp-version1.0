<?php
error_reporting(0);
include "../config/connectDB.php";

//-----------------------------------------------------------------
//Getting Data form payOrderCan table------------------------------
include "../includes/pay_cancell_JSON.php";
	
	$fp = fopen('../js/json/payorder_cancellation.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form payOrderCan table------------------------------


//--------------------------------------------------------------------
//Getting Data form bankAddrFormat table------------------------------ 
include "../includes/bankAddress_JSON.php";

	$fp = fopen('../js/json/bankAddressFormat.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//--------------------------------------------------------------------
//Getting Data form bankAddrFormat table------------------------------



//-----------------------------------------------------------------
//Getting Data form shipping table------------------------------ 
include "../includes/Shipping_JSON.php";

	$fp = fopen('../js/json/shipping.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form shipping table------------------------------


//-----------------------------------------------------------------
//Getting Data form acTitle table------------------------------ 
include "../includes/accountTitle_JSON.php";

	$fp = fopen('../js/json/acTitle.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form acTitle table------------------------------


//--------------------------------------------------------------------
//Getting Data form bankAccTtitle table------------------------------ 
include "../includes/bankAccTtitle_JSON.php";

	$fp = fopen('../js/json/bankAccTtitle.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//--------------------------------------------------------------------
//Getting Data form bankAccTtitle table------------------------------ 



?>

<h1>Pay Order Cancellation</h1>
<hr>
<div id="top_header">
<form action="config/pay_cancellation.php" method="POST">
<table border="0" name="payC_bank">
	<tr>
		<td>
			Current Date :
		</td>
		<td>
			<input kendo-date-picker
			 k-format="'dd/MM/yy'" 
			 name="cDate" style="font-size:13px;width:200px;" 
			 required/>
		</td>
		<td width="15%">
				Select Account
		</td>
		<td>
			<select name="bank" style="width:120px;" ng-model="b_a"> 
				<option ng-repeat='ac_t_n in ac_title_number'>{{ac_t_n.addr}}</option>
			</select>
		</td>
		<td>
			Pay Order Amount : 
		</td>
		<td>
			<input type="text" name="amount" style="width:200px;" required/>
		</td>
	</tr>
	<tr>
		<td>
			PO No.
		</td>
		<td>
			<input type="text" name="poNo" style="width:200px;" required/>
		</td>
		<td>
			Shipping Line : 
		</td>
		<td>
				<select name="shipping"> 
					<option value="select">-Select-</option>
					<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
				</select>
		</td>
		<td>
			A/C Title: 
		</td>
		<td>
			<select name="acTitle">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
		</td>
	</tr>

	<tr>
		<td>
			PO Date : 
		</td>
		<td>
			<input kendo-date-picker
			 k-format="'dd/MM/yy'" 
			 name="poDate" style="font-size:13px;width:200px;" 
			 required/>
		</td>
		<td></td>
		<td></td>
	</tr>
</table>

<md-button id="md-raised" class="md-raised" style="width:150px;border:1px solid #999;margin-top:10px;">Submit and create</md-button> 
<?php 
				/*<!----------------///////////--Showing-Success-or- Failed-Message-from session--//////////////////---------------------->*/
				session_start();
					if($_SESSION['check'] == 'PCsuccess'){			
						echo "<font color='green'>Add Successfully</font>"; 
					}else if($_SESSION['check'] == 'PCnot'){
						echo "<font color='red'>Could not be saved</font>"; 
					}else if($_SESSION['check'] == 'bank'){
						echo "<font color='red'>Please select your <b>Bank</b></font>"; 
					}else if($_SESSION['check'] == 'ship'){
						echo "<font color='red'>Please select your <b>Shipping Line</b></font>"; 
					}else if($_SESSION['check'] == 'actitle'){
						echo "<font color='red'>Please select your <b>Account Title</b></font>"; 
					}
				/*<!----------------///////////--Showing-Success-or- Failed-Message-from session--//////////////////---------------------->*/
				
				//Change the Session value to remove any message at refresh//					
				$_SESSION['check'] = '';	
?>
</div>				
<hr>
<div id="addr">
	<b>Search :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
	Shipping Line: <input type="text" placeholder="Search Shipping Line" ng-model="search.ship_line"> |  A/C Title : <input type="text" placeholder="Search Account Title" ng-model="search.ac_title"> |  Amount : <input type="text" placeholder="Search Amount" ng-model="search.amount">
	<hr/>
	<table border="0">
		<tr class="t_r">
			<th width="10%">Dated</th>
			<th width="25%">Shipping Line</th>
			<th width="20%">Account Title</th>
			<th width="7%">Amount</th>
			<th width="7%">PO No</th>
			<th width="10%">PO Date</th>
			<th width="16%">Bank</th>
			<th width="5%">View</th>
		</tr>
		<tr ng-repeat="pcc in payOrderCancel | filter:search" class="repeat-animation">
			<td align="center">{{pcc.curr_date}}</td>
			<td>{{pcc.ship_line}}</td>
			<td>{{pcc.ac_title}}</td>
			<td align="right">{{pcc.amount}}/-</td>
			<td align="right">{{pcc.po_num}}</td>
			<td align="center">{{pcc.po_date}}</td>
			<td>{{pcc.bank}}</td>
			<td align="center"> 
					<md-button href='config/view_pagesPHP/payCancellationView.php?id={{pcc.id}}'>
					View
					</md-button>
			</td>
		</tr>
	</table>
</div>

</form>