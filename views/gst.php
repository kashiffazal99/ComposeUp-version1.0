<?php
error_reporting(0);
include "../config/connectDB.php";
session_start();

//-----------------------------------------------------------------
//Getting Data form com_reg table------------------------------ 
include "../includes/company_reg_JSON.php";

	$fp = fopen('../js/json/company_reg.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form com_reg table------------------------------ 


//-----------------------------------------------------------------
//Getting Data form Exporter Info------------------------------ 
include "../includes/exporter_JSON.php";

	$fp = fopen('../js/json/exporter.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data form shipping table------------------------------
?>
<html>
<head>
<script>
function getMonthName() {
var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";

    var d = new Date();
    var n = month[d.getMonth()];
    //document.getElementsByTagName("input")[0].setAttribute("value", n + " 2015"); 
    //document.getElementsByTagName("input")[1].setAttribute("value", n + " 2015"); 
	document.getElementById("demo").value = n + " 2015";
} 
</script>


</head>
<body >
			<md-button style="float:right;border:1px solid green;" href="#gstReturnPS">
		Save and Print
	</md-button>
	
<h1>
Goods and Services Tax (GST)
				<?php 
				/*<!----------------///////////--Showing-Success-or- Failed-Message-from session--//////////////////---------------------->*/
				session_start();
					if($_SESSION['check'] == 'success'){			
						echo " | <font color='green' size='4px'> Add Successfully</font>"; 
					}else if($_SESSION['check'] == 'not'){
						echo " | <font color='red' size='4px'>Could not be saved</font>"; 
					}else if($_SESSION['check'] == 'company'){
						echo " | <font color='red' size='3px'>Please select <b>Company Name</b></font>"; 
					}else if($_SESSION['check'] == 'exp_n'){
						echo " | <font color='red' size='3px'>Please select <b>Exporter Name</b></font>"; 
					}else if($_SESSION['check'] == 'Port'){
						echo " | <font color='red' size='3px'>Please select <b>Port</b></font>"; 
					}
				/*<!----------------///////////--Showing-Success-or- Failed-Message-from session--//////////////////---------------------->*/
				
				//Change the Session value to remove any message at refresh//					
				$_SESSION['check'] = '';	
				?>
</h1>


<hr/>
<form action="config/gst.php" method="POST" >
	<div id="gst">
	
	<table border="0">
		<tr>
			<td colspan="3" class="t_r"><center>Goods Declaration (GD)</center></td>
		</tr>
		<tr><td style="height:10px;display:none; " colspan="3"></td></tr>
		<tr>
			<td width="48%" valign="top">
				<!-------///////////---------First Column------/////////////---------->
				<table border="0">
					<tr><td style="height:30px;background:#888;text-align:center;color:#fff;" colspan="2">Company & Goods Info</td></tr>
					<tr>
						<td width="15%">
							Company name : 
						</td>
						<td width="32%">
							<select name="company" onfocus="getMonthName();">  
								<option value="select">-Select-</option>
								<option ng-repeat="com in company">{{com.com_name}}</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Month :
						</td>
						<td>
							<input name="month" id="demo" kendo-date-picker k-options="monthSelectorOptions" placeholder="Select month" k-format="'MMMM yyyy'" required/>
						</td>
					</tr>
					<tr>
						<td>
							Exporter Name :
						</td>
						<td>
							<select name="exp_name"> 
								<option value="select">-Select-</option>
								<option ng-repeat="exp in exporter">{{exp.exp_name}}</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Ship Bill #
						</td>
						<td>
							<input type="text" name="ship_bill" placeholder="Ship Bill #" required/>
							 | 
							<input kendo-date-picker k-format="'dd-MM-yyyy'" 
								maxlength="30" placeholder="Date" style="font-size:13px"
								name="ship_date" 
								required
							/>
						</td>
					</tr>
					<tr>
						<td>
							Contract/LC No.
						</td>
						<td>
							<input type="text" name="lc_no" placeholder="LC No." required/> 
							 | 
							<input kendo-date-picker k-format="'dd-MM-yyyy'" 
								maxlength="30" placeholder="Date" style="font-size:13px"
								name="lc_date" 
								required
							/>
						</td>
					</tr>
					<tr>
						<td>
							CRN No.
						</td>
						<td>
							<input type="text" name="crn" placeholder="CRN No." required/>
						</td>
					</tr>
					<tr>
						<td>
							Port :
						</td>
						<td>
							<select name="port">
								<option value="select">-Select-</option>
								<option>KAPI</option>
								<option>KAPW</option>
								<option>KAPE</option>
								<option>KPPI</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Weight in Kgs:
						</td>
						<td>
							<input type="text" name="total_kgs" ng-model="wt" required/>
						</td>
					</tr>
					<tr>
						<td>
							Bank Rate: 
						</td>
						<td>
							<input type="text" name="br" ng-model="bank_rate" required/>
						</td>
					</tr>
					<tr>
						<td>
							Dollar Rate: 
						</td>
						<td>
							<input type="text" name="dr" ng-model="Dollar_rate" maxlength=""required/>
						</td>
					</tr>
				</table>
				<!-------///////////---------First Column------/////////////---------->
			</td>
			<td width="32%" valign="top">
				<!-------///////////---------Second Column------/////////////---------->
					<table border="0">
					<tr><td style="height:30px;background:#888;text-align:center;color:#fff;" colspan="3">Taxes & Charges Rate</td></tr>
						<tr>
							<td>Insurance : </td>
							<td>
								<input type="number" style="padding:3px;width:50px;" ng-model="insurance" ng-disabled="!ins_disable" required>
								<input type="number" name="ins_rate" style="padding:3px;width:50px;" ng-model="insurance" hidden>
							</td>
							<td>
								<md-checkbox name="che_ins" style="float:left;margin:0px;padding:0px;" ng-model="ins_per" ng-init="ins_per=true">% | </md-checkbox>
								<input type="checkbox" name="ins_box" value="yes" ng-model="ins_per" hidden>
								<md-checkbox style="float:right;margin:0px;padding:0px;" ng-model="ins_disable">Edit</md-checkbox>
							</td>
						</tr>
						<tr>
							<td>Landing : </td>
							<td>
								<input type="number" style="padding:3px;width:50px;" ng-model="landing" ng-disabled="!lan_disable" required>
								<input type="number" name="lan_rate" style="padding:3px;width:50px;" ng-model="landing" hidden>
							</td>
							<td>
								<md-checkbox style="float:left;margin:0px;padding:0px;" ng-model="lan_per" ng-init="lan_per=true">% | </md-checkbox>
								<input type="checkbox" name="lan_box" value="yes" ng-model="lan_per" hidden>
								<md-checkbox style="float:right;margin:0px;padding:0px;" ng-model="lan_disable">Edit </md-checkbox>
							</td>
						</tr>
						<tr>
							<td>Custom Duty(CD) : </td>
							<td>
								<input type="number" style="padding:3px;width:40px;" ng-model="cus_duty" ng-disabled="!cus_disable" required>%
								<input type="number" name="cd_tax" ng-model="cus_duty" hidden>	
							</td>
							<td><md-checkbox style="float:right;margin:0px;padding:0px;" ng-model="cus_disable">Edit</md-checkbox></td>
						</tr>
						<tr>
							<td>Sale Tax (ST): </td>
							<td>
								<input type="number" style="padding:3px;width:40px;" ng-model="sale_tax" ng-disabled="!sale_disable" required>%
								<input type="number" name="st_tax" ng-model="sale_tax" hidden>	
							</td>
							<td><md-checkbox style="float:right;margin:0px;padding:0px;" ng-model="sale_disable">Edit</md-checkbox></td>
						</tr>
						<tr>
							<td>Addition Sale Tax (AST):</td>
							<td>
								<input type="number" style="padding:3px;width:40px;" ng-model="ast_tax" ng-disabled="!ast_disable" required>%
								<input type="number" name="ast_tax" ng-model="ast_tax" hidden>	
							</td>
							<td><md-checkbox style="float:right;margin:0px;padding:0px;" ng-model="ast_disable">Edit</md-checkbox></td>
						</tr>
						<tr>
							<td>Income Tax (IT) : </td>
							<td>
								<input type="number" style="padding:3px;width:40px;" ng-model="it_tax" ng-disabled="!it_disable" required>%
								<input type="number" name="it_tax" ng-model="it_tax" hidden>
							</td>
							<td><md-checkbox style="float:right;margin:0px;padding:0px;" ng-model="it_disable">Edit</md-checkbox></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				<!-------///////////---------Second Column------/////////////---------->
			</td>
			<td width="20%" valign="top">
				<!-------///////////---------Third Column------/////////////---------->
				<table border="0">
				<tr><td style="height:30px;background:#7b7b7b;text-align:center;color:#fff;">All Taxes</td></tr>
						<tr>
							<td>
							<!---------------------------Landed Cost-------------------------->
		<!---------------------------------------------------------------->
				<!------If Insurance is 1% & Landing Charges is 1% ------>
				<div ng-if="ins_per == true && lan_per == true">
				<!--Both are in Perentage-->
				Landed Cost &nbsp;
				&nbsp;<input type="text" class="dim" value=" : {{(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate | number:0)}}" readonly>
				<input type="text" class="dim" value="{{(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)|number:0}}" name="lan_cost"  hidden>
				</div>
				
				<!------If Insurance has an amount & Landing Charges is 1% ------>
				<div ng-if="ins_per == false && lan_per == true">
				<!--Ins has Amount | Landing has Percentage-->
				Landed Cost &nbsp;
				&nbsp;<input type="text" class="dim" value=" : {{(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)|number:0}}" readonly>
				<input type="text" class="dim" value="{{(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)|number:0}}" name="lan_cost" hidden >
				</div>
				
				<!------If Insurance has an amount & Landing Charges has an amount------>
				<div ng-if="ins_per == false && lan_per == false">
				<!--Both are in Amount-->
				Landed Cost &nbsp;
				&nbsp;<input type="text" class="dim" value=" : {{((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)|number:0}}" readonly>
				<input type="text" class="dim" value="{{((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)|number:0}}" name="lan_cost" hidden>
				</div>
				
				<!------If Insurance is 1% & Landing Charges has an amount ------>
				<div ng-if="ins_per == true && lan_per == false">
				<!--ins has 1% | Landing has amount-->
				Landed Cost &nbsp;
				&nbsp;<input type="text" class="dim" value=" : {{(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)|number:0}}" readonly>
				<input type="text" class="dim" value="{{(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)|number:0}}" name="lan_cost" hidden>
				</div>
				


		<!---------------------------Landed Cost-------------------------->
		<!---------------------------------------------------------------->
							</td>
						</tr>
						<tr>
							<td>
							<!---------------------------Custom Duty-------------------------->
			<!---------------------------------------------------------------->
		
			<!------If Insurance is 1% & Landing Charges is 1% ------>
			<div ng-if="ins_per == true && lan_per == true">
			CD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="text" class="dim" value=" : {{ 
					((((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance has an amount & Landing Charges is 1% ------>
			<div ng-if="ins_per == false && lan_per == true">
			CD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance has an amount & Landing Charges has an amount------>
			<div ng-if="ins_per == false && lan_per == false">
			CD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					(((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance is 1% & Landing Charges has an amount ------>
			<div ng-if="ins_per == true && lan_per == false">
			CD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)|number:0}}" disabled>
			</div>
		<!---------------------------Custom Duty-------------------------->
		<!---------------------------------------------------------------->
							</td>
						</tr>
						<tr>
							<td>
		<!-----------------------------Sale Tax--------------------------->
		<!---------------------------------------------------------------->
			<!------If Insurance is 1% & Landing Charges is 1% ------>
			<div ng-if="ins_per == true && lan_per == true">
			ST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					)*(sale_tax/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance has an amount & Landing Charges is 1% ------>
			<div ng-if="ins_per == false && lan_per == true">
			ST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)*(sale_tax/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance has an amount & Landing Charges has an amount------>
			<div ng-if="ins_per == false && lan_per == false">
			ST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					(((((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)*(sale_tax/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance is 1% & Landing Charges has an amount ------>
			<div ng-if="ins_per == true && lan_per == false">
			ST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					)*(sale_tax/100)
					)|number:0}}" disabled>
			</div>

		<!----------------------------Sale Tax---------------------------->
		<!---------------------------------------------------------------->
							</td>
						</tr>
						<tr>
							<td>
		<!---------------------------AST Tax-------------------------->
		<!---------------------------------------------------------------->
			<!------If Insurance is 1% & Landing Charges is 1% ------>
			<div ng-if="ins_per == true && lan_per == true">
			AST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					)*(ast_tax/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance has an amount & Landing Charges is 1% ------>
			<div ng-if="ins_per == false && lan_per == true">
			AST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)*(ast_tax/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance has an amount & Landing Charges has an amount------>
			<div ng-if="ins_per == false && lan_per == false">
			AST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					(((((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)*(ast_tax/100)
					)|number:0}}" disabled>
			</div>
			<!------If Insurance is 1% & Landing Charges has an amount ------>
			<div ng-if="ins_per == true && lan_per == false">
			AST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" class="dim" value=" : {{ 
					((((((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					)*(ast_tax/100)
					)|number:0}}" disabled>
			</div>

		<!----------------------------AST Tax----------------------------->
		<!---------------------------------------------------------------->
							</td>
						</tr>
						<tr>
							<td>
		<!---------------------------Income Tax---------------------------->
		<!---------------------------------------------------------------->

				<!------If Insurance is 1% & Landing Charges is 1% ------>
				<div ng-if="ins_per == true && lan_per == true">
				<!--Both are in Perentage-->
					IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="dim_it" value=" : {{ 
					(((((
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					)					
					*(sale_tax/100)
					)+(
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					)
					+
					(((
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					)
					*(ast_tax/100)
					)
					)
					*(it_tax/100)		
					|number:0}}" disabled>
				
				</div>

				<!------If Insurance has an amount & Landing Charges is 1% ------>
				<div ng-if="ins_per == false && lan_per == true">
				<!--Ins has Amount | Landing has Percentage-->
					IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="dim_it" value=" : {{ 
					(((((
					(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)					
					*(sale_tax/100)
					)+(
					(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					(((((Dollar_rate*wt)+insurance)*(landing/100))+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)
					+
					(((
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100)+(landing/100))+(Dollar_rate*wt)) * bank_rate)
					)
					*(ast_tax/100)
					)
					)
					*(it_tax/100)		
					|number:0}}" disabled>
					
					
				</div>

				<!------If Insurance has an amount & Landing Charges has an amount------>
				<div ng-if="ins_per == false && lan_per == false">
				<!--Both are in Amount-->
					IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="dim_it" value=" : {{ 
					(((((
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)					
					*(sale_tax/100)
					)+(
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)
					+
					(((
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					*(cus_duty/100)
					)+
					((((Dollar_rate*wt)+insurance+landing)+ ((Dollar_rate*wt)+insurance))*bank_rate)
					)
					*(ast_tax/100)
					)
					)
					*(it_tax/100)		
					|number:0}}" disabled>
				</div>

				<!------If Insurance is 1% & Landing Charges has an amount ------>
				<div ng-if="ins_per == true && lan_per == false">
				<!--ins has 1% | Landing has amount-->
					IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="dim_it" value=" : {{ 
					(((((
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					)					
					*(sale_tax/100)
					)+(
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					)
					+
					(((
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					*(cus_duty/100)
					)+
					(((Dollar_rate*wt)*((insurance/100)+(0.01/100))+landing+(Dollar_rate*wt)) * bank_rate)
					)
					*(ast_tax/100)
					)
					)
					*(it_tax/100)		
					|number:0}}" disabled>
				</div>
				

		<!---------------------------------------------------------------->
		<!---------------------------Income Tax---------------------------->
		
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</table>
				<!-------///////////---------Third Column------/////////////---------->
			</td>
		</tr>
		<tr><td colspan="3" style="display:none;"></td></tr>
			<tr>
				<td colspan="3">
				<br/>
					<center>
						<md-button class="button">
							Save and Print
						</md-button>
					</center>
				</td>
			</tr>
	</table>
	
	
	

		
	
		
		
</div>	
</form>

</body>    
</html>