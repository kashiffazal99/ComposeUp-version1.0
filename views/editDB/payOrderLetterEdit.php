<?php
//error_reporting(0);
include "../../config/connectDB.php";
session_start();

//-----------------------------------------------------------------
//Getting Data form PayOrderLetter table------------------------------ 
include "../../includes/payOrderLetterList_JSON.php";

	$fp = fopen('../../js/json/payOrderLetterList.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form PayOrderLetter table------------------------------ 
?>
<h1>Pay Order Letter Edit</h1>
<hr/>

<b>Search by	 </b>
<br/>
<br/>
Date : <input type="text" placeholder="PO Date" ng-model="search.date"/> |
Amount : <input type="text" placeholder="PO Amount" ng-model="search.totalAmount"/> |
PO Qty: <input type="text" placeholder="Pay order Qty" ng-model="search.count"/> 
<hr/>	

<div id="addr">
<table border="0" style="width:100%;">
	<tr class="t_r">
		<th width="100px">Date</th>
		<th width="100px">Cheque #</th>
		<th width="215px">Bank</th>
		<th width="215px">Account Title</th>
		<th width="70px">PO Qty</th>
		<th width="100px">Total</th>
		<th width="50px">View</th>
		<th width="50px">Delete</th>
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
		<td align="center">
			<md-button ng-click="deleteConfirm(pol.id);">
				Delete
			</md-button>
		</td>
	</tr>
</table>
</div>