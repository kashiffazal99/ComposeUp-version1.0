<?php
//error_reporting(0);
include "../../config/connectDB.php";
include "../../includes/pay_cancell_JSON.php";

$fp = fopen('../../js/json/payorder_cancellation.json','w');
if(!$fp)die("Cannot open file");
fwrite($fp, json_encode($MySql_Data));
fclose($fp);

?>

<h1>Pay cancellation </h1>
{{name}}
<hr>
<div id="addr">
	Search by
	<br/>
	Shipping Line: <input type="text" placeholder="Search Shipping Line" ng-model="search.ship_line"> |  A/C Title : <input type="text" placeholder="Search Account Title" ng-model="search.ac_title"> |  Amount : <input type="text" placeholder="Search Amount" ng-model="search.amount">
	<hr/>
	<table border="0">
		<tr class="t_r">
			<th width="8%">Dated</th>
			<th width="31%">Shipping Line</th>
			<th width="20%">Account Title</th>
			<th width="7%">Amount</th>
			<th width="7%">PO No</th>
			<th width="8%">PO Date</th>
			<th width="15%">Bank</th>
			<th width="5%">View</th>
			<th width="5%">Delete</th>
		</tr>
		<tr nga-default ng-repeat="pcc in payOrderCancel | filter:search" class="repeat-animation">
			<td align="center">{{pcc.curr_date}}</td>
			<td>{{pcc.ship_line}}</td>
			<td>{{pcc.ac_title}}</td>
			<td align="right">{{pcc.amount}}/-</td>
			<td align="right">{{pcc.po_num}}</td>
			<td align="center">{{pcc.po_date}}</td>
			<td>{{pcc.bank}}</td>
			<td align="center"> 
					<md-button href='config/view_pagesPHP/payCancellationView.php?cd={{pcc.curr_date}}&sl={{pcc.ship_line}}&act={{pcc.ac_title}}&am={{pcc.amount}}&pon={{pcc.po_num}}&pod={{pcc.po_date}}&bk={{pcc.bank}}&acc={{pcc.acNo}}&babbr={{act.bankAcTitle}}'>
					<span class="glyphicon glyphicon-fullscreen"></span>
					</md-button>
			</td>
			<td align="center"> 
					<!--md-button href='config/view_pagesPHP/deletePayCancellation.php?ref={{pcc.id}}'-->
					<md-button ng-click="showConfirm($event,pcc.id)">
					<span class="glyphicon glyphicon-remove-circle"></span>
					</md-button>
			</td>
		</tr>
	</table>
</div>