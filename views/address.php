<?php
//error_reporting(0);
include "../config/connectDB.php";
include "../includes/address_JSON.php";
	$fp = fopen('../js/json/address.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
?>

<html>
<head>
  <!--link rel='stylesheet prefetch' href='lib/popUp_Lib/css/magnific-popup.css'>
  <link rel='stylesheet prefetch' href='lib/popUp_Lib/css/effects.css'>
  <script src="lib/popUp_Lib/js/prefixfree.min.js"></script-->
</head>
<body>
	
<!--ul id="inline-popups"-->




	<h1>Customers Address</h1>		
	<hr/>
	<div id="addr">
	Search Name: <input type="text" placeholder="Search name" ng-model="search.name"> | Search City : <input type="text" placeholder="Search city" ng-model="search.city">
	<hr/>
	<table border="0">
		<tr class="t_r">
			<th width="35%">Name</th>
			<th width="15%">City</th>
			<th width="30%">Address</th>
			<th width="10%">View</th>
			<th width="10%">Print</th>
		</tr>
		<tr ng-repeat="addr in address | filter:search" class="repeat-animation">
			<td style="font-size:14px;">{{addr.namebr}}</td>
			<td style="font-size:14px;" align="center">{{addr.city}}</td>
			<td style="font-size:14px;">{{addr.address}}</td>
			<td style="font-size:14px;" align="center"> 
			
			<md-button ng-click="ViewInfo(addr.name,addr.address,addr.city,addr.phone,addr.mob,addr.other);">
				<span class="glyphicon glyphicon-fullscreen"></span>
			</md-button>

		  </td>
			<td style="font-size:14px;" align="center">
				<md-button href="config/print_address.php?id={{addr.id}}">
				<span class="glyphicon glyphicon-print"></span>
				</md-button>
			</td>
		</tr>
	</table>
</div>






</ul>




  <!--script src='lib/popUp_Lib/js/jquery.js'></script>
  <script src='lib/popUp_Lib/js/jquery.magnific-popup.min.js'></script>
  <script src="lib/popUp_Lib/js/index.js"></script-->



</body>

</html>

