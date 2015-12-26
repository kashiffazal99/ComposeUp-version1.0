<?php
//error_reporting(0);
include "../../config/connectDB.php";
include "../../includes/address_JSON.php";
	
	$fp = fopen('../../js/json/address.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
	
	

?>

	<h1>Edit Address</h1>		
	<hr/>
	
	<div id="edit_table">
	<form action="config/edit_address.php" method="POST">
	<table border="0">
	<b>Add new data</b>
		<tr>
			<td>Name:	</td> 	<td><input type="text" style="width:200px;" maxlength="80" name="c_name" required/>		</td>	<td>Phone #</td> <td><input type="text" style="width:200px;" maxlength="100" name="c_phone"/></td>
		</tr>
		<tr>		
			<td>Address:</td>	<td><input type="text" style="width:200px;" maxlength="100" name="c_address" required/>	</td>	<td>Mobile #</td> <td><input type="text" style="width:200px;" maxlength="100" name="c_mob"/></td>
		</tr>
		<tr>
			<td>City: 	</td>	<td><input type="text" style="width:200px;" maxlength="30" name="c_city" required/>		</td>	<td>Other(s) #</td> <td><input type="text" style="width:200px;" maxlength="200" name="c_other"/></td>
		</tr>
		<tr>
			<td>
				<md-button id="md-raised" class="md-raised" style="width:80px;border:1px solid #999;">Add</md-button>
			</td> 
			<td></td> 
			<td> </td>
			<td></td>
		</tr>
	</table>
	</form>
	</div>
	<hr/>
	<div id="addr">
	Search Name: <input type="text" placeholder="Search name" ng-model="search.name"> | Search City : <input type="text" placeholder="Search city" ng-model="search.city">
	<hr/>
	<table border="0">
		<tr class="t_r">
			<td width="35%" align="center">Name</td>
			<td width="15%" align="center">City</td>
			<td width="20%" align="center">Address</td>
			<td width="10%" align="center">View</td>
			<td width="10%" align="center">Print</td>
			<td width="10%" align="center">Delete</td>
		</tr>
		<tr ng-repeat="addr in address | filter:search" class="repeat-animation">
			<td>{{addr.name}}</td>
			<td>{{addr.city}}</td>
			<td>{{addr.address}}</td>
			<td align="center"> 
				
			<md-button ng-click="ViewInfo(addr.name,addr.address,addr.city,addr.phone,addr.mob,addr.other);">
				<span class="glyphicon glyphicon-fullscreen"></span>
			</md-button>
					
			</td>
			<td style="font-size:14px;" align="center">
				<md-button href="config/print_address.php?id={{addr.id}}&src=edit">
				<span class="glyphicon glyphicon-print"></span>
				</md-button>
			</td>
			
			<td align="center"> 
			
		<md-button ng-click="deleteConfirm(addr.id);">
			<span class="glyphicon glyphicon-remove-circle"></span>
		</md-button>
		
		</td>
		</tr>
	</table>
</div>

