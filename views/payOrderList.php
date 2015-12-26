<?php
//error_reporting(0);
include "../config/connectDB.php";
//-----------------------------------------------------------------
//Getting Data form PayOrderLetter table------------------------------ 
include "../includes/payOrderLetterList_JSON.php";

	$fp = fopen('../js/json/payOrderLetterList.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form PayOrderLetter table------------------------------ 
?>
<a href="#payOrder" style="float:left;text-decoration:none;margin-right:10px;">
		<md-button class="md-raised" style="width:100px;"> < Back</md-button> 
	</a>
	
<h1> | List of Pay Order Letters</h1>
<hr/>
<b>Search by: </b>	 <br/><br/>
&nbsp;
Date :	 <input type="text" placeholder="PO Date" ng-model="search.date"/> |
Amount : <input type="text" placeholder="PO Amount" ng-model="search.totalAmount"/> |
PO Qty:	 <input type="text" placeholder="Pay order Qty" ng-model="search.count"/> 
<br/>
<br/>
<div id="addr">
<table border="0" style="width:100%;">
	<tr class="t_r">
		<th width="10%">Date</th>
		<th width="15%">Cheque #</th>
		<th width="20%">Bank</th>
		<th width="25%">Account Title</th>
		<th width="10%">PO Qty</th>
		<th width="10%">Total</th>
		<th width="10%">View</th>
	</tr>
	<tr ng-repeat="pol in POL | filter:search" class="repeat-animation">
		<td align="center">{{pol.date}}</td>
		<td align="center">{{pol.cheque_num}}</td>
		<td align="center">{{pol.bankName}}</td>
		<td align="center">{{pol.bankAcTitle}}</td>
		<td align="center">{{pol.count}}</td>
		<td align="right">{{pol.totalAmount}}/-</td>
		<td align="center">
					<md-button href='config/view_pagesPHP/payOrderLetterView.php?id={{pol.id}}'>
					View
					</md-button>
		</td>
	</tr>
</table>
</div>