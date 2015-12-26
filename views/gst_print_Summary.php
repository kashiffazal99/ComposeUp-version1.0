<?php
//error_reporting(0);
include "../config/connectDB.php";
include "../includes/gst_JSON.php";
	$fp = fopen('../js/json/gst.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);

	
//-----------------------------------------------------------------
//Getting Data form com_reg table------------------------------ 
include "../includes/company_reg_JSON.php";

	$fp = fopen('../js/json/company_reg.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form com_reg table------------------------------ 

?>

<h1>GST Summary & Records </h1>
<hr/>
<form action="config/gstCreateSummary.php" method="GET">
Get Summary for the month of : 
<input name="month" id="demo" kendo-date-picker k-options="monthSelectorOptions" placeholder="Select month" k-format="'MMMM yyyy'" required/>
<select name="com">  
								<option value="select">-Select-</option>
								<option ng-repeat="com in company">{{com.com_name}}</option>
							</select>
<md-button>
Create
</md-button>
</form>
<br/>
<b>Search as :</b> <br/>
Month: <input type="text" placeholder="Search Month" ng-model="search.month"> |
BL #: <input type="text" placeholder="Search Ship Bill" ng-model="search.bl">   |
CRN #: <input type="text" placeholder="Search CRN #" ng-model="search.crn"> 
<div id="addr">
	<hr/>
	<table border="0">
		<tr class="t_r">
			<th width="5%">Ref</th>
			<th width="15%">Month</th>
			<th width="15%">Company</th>
			<th width="25%">Ship Bill / BL</th>
			<th width="10%">CRN</th>
			<th width="10%">Income Tax (IT)</th>
			<th width="10%">View</th>
			<th width="10%">Print</th>
		</tr>
		<tr ng-repeat="addr in gst | filter:search" class="repeat-animation">
			<td align="center" style="font-size:14px;">{{addr.ref}}</td>
			<td align="center" style="font-size:14px;" align="center">{{addr.Month}}</td>
			<td align="center" style="font-size:14px;" align="center">{{addr.name}}</td>
			<td align="center" style="font-size:14px;">{{addr.ShipBill}}</td>
			<td align="center" style="font-size:14px;">{{addr.CRN}}</td>
			<td align="center" style="font-size:14px;">{{addr.IncomeTax}}</td>
			<td align="center" style="font-size:14px;" align="center"> 
				<md-button href='config/view_pagesPHP/gstView.php?id={{addr.ref}}'>
					<span class="glyphicon glyphicon-fullscreen"></span>
				</md-button>
		  </td>
			<td style="font-size:14px;" align="center">
				<md-button href='config/view_pagesPHP/gstPrint.php?id={{addr.ref}}'>
					<span class="glyphicon glyphicon-print"></span>
				</md-button>
			</td>
		</tr>
	</table>
</div>
