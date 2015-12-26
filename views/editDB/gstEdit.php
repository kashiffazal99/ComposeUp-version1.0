<?php
//error_reporting(0);
session_start();

include "../../config/connectDB.php";
include "../../includes/gst_JSON.php";
	$fp = fopen('../../js/json/gst.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
	
?>

<h1>GST Records </h1>
<hr/>

<b>Search as :</b> <br/><br/>
Month: <input type="text" placeholder="Search Month" ng-model="search.month"> |
BL #: <input type="text" placeholder="Search Ship Bill" ng-model="search.bl">   |
CRN #: <input type="text" placeholder="Search CRN #" ng-model="search.crn"> 
<div id="addr">
	<hr/>
	<table border="0">
		<tr class="t_r">
			<th width="5%">Ref</th>
			<th width="15%">Month</th>
			<th width="30%">Ship Bill / BL</th>
			<th width="10%">CRN</th>
			<th width="20%">Income Tax (IT)</th>
			<th width="10%">View/Print</th>
			<th width="10%">Delete</th>
		</tr>
		<tr ng-repeat="addr in gst | filter:search" class="repeat-animation">
			<td align="center" style="font-size:14px;">{{addr.ref}}</td>
			<td align="center" style="font-size:14px;">{{addr.Month}}</td>
			<td style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{addr.ShipBill}}</td>
			<td align="center" style="font-size:14px;">{{addr.CRN}}</td>
			<td align="center" style="font-size:14px;"><b>{{addr.IncomeTax}}</b></td>
			<td align="center" style="font-size:14px;" align="center"> 
				<md-button class="aria-label" href='config/view_pagesPHP/gstView.php?id={{addr.ref}}'>
					<span class="glyphicon glyphicon-fullscreen"></span>
				</md-button>
		  </td>
			<td style="font-size:14px;" align="center">
				<md-button ng-click="deleteConfirm(addr.ref);">
					<span class="glyphicon glyphicon-remove-circle"></span>
				</md-button>
			
			</td>
		</tr>
	</table>
</div>
