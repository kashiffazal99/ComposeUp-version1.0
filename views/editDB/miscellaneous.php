<?php
//error_reporting(0);
include "../../config/connectDB.php";
session_start();

//--------------------------------------------------------------------
//Getting Data form bankAddrFormat table------------------------------ 
include "../../includes/bankAddress_JSON.php";

	$fp = fopen('../../js/json/bankAddressFormat.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//--------------------------------------------------------------------
//Getting Data form bankAddrFormat table------------------------------



//--------------------------------------------------------------------
//Getting Data form bankAccTtitle table------------------------------ 
include "../../includes/bankAccTtitle_JSON.php";

	$fp = fopen('../../js/json/bankAccTtitle.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//--------------------------------------------------------------------
//Getting Data form bankAccTtitle table------------------------------ 


//--------------------------------------------------------------------
//Getting Data form Company Reg table------------------------------ 
include "../../includes/company_reg_JSON.php";

	$fp = fopen('../../js/json/company_reg.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//--------------------------------------------------------------------
//Getting Data form Company Reg table------------------------------ 




//-----------------------------------------------------------------
//Getting Data from shipping table------------------------------ 
$Query = "SELECT * FROM shipping";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array ('id' => $Row['Id'],'shipping' => $Row['shipping']);
	}
	
	$fp = fopen('../../js/json/shipping.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data from shipping table------------------------------


//-----------------------------------------------------------------
//Getting Data from acTitle table------------------------------ 
$Query = "SELECT * FROM acTitle";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array ('id' => $Row['Id'],'bankAcTitle' => $Row['bankAcTitle']);
	}
	
	$fp = fopen('../../js/json/acTitle.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//-----------------------------------------------------------------
//Getting Data from acTitle table------------------------------


//--------------------------------------------------------------------
//Getting Data form exporter_info table------------------------------ 
include "../../includes/exporter_info_JSON.php";

	$fp = fopen('../../js/json/exporter_info.json','w');
	if(!$fp)die("Cannot open file");
	fwrite($fp, json_encode($MySql_Data));
	fclose($fp);
//--------------------------------------------------------------------
//Getting Data form bankAccTtitle table------------------------------ 




			


?>
<h1>Miscellaneous Records</h1>
			
			

<hr>

    <md-tabs class="tab-head" md-selected="data.selectedIndex">
      <md-tab id="tab1">
		Shipping Line
      </md-tab>
      <md-tab id="tab2">
		Bank Address
      </md-tab>
      <md-tab id="tab3">
		Account Titles
      </md-tab>     
	  <md-tab id="tab4">
		Bank Accounts
      </md-tab> 
	  <md-tab id="tab5">
		Company Registration
      </md-tab> 
	  <md-tab id="tab6">
		Exporter Info 
      </md-tab> 
    </md-tabs>
	
    <ng-switch on="data.selectedIndex" class="tabpanel-container">

<!-----------------------Shipping Line Table------------------------------>       
<div role="tabpanel" id="tab1-content" aria-labelledby="tab1" ng-switch-when="0" md-swipe-left="next()" md-swipe-right="previous()">
<div id="addr">
			
			<form action="config/addData.php" method="POST">
			<input type="text" style="width:150px;" maxlength="80" placeholder="Search" ng-model="search.shipping"/> |
			<input type="text" name="addShipping" style="width:400px;" maxlength="80" placeholder="Type here to add new shipping line" required/>
			<input type="hidden" name="H_Type" value="addShipping"/>
			<md-button class="md-raised" style="width:100px;">
			Add
			</md-button>
			</form>
			<br/>
<table border="0">
	<tr class="t_r">
		<th>ID</th>
		<th>Shipping Line Name</th>
		<th>Delete</th>
	</tr>
	<tr ng-repeat="ship in shipping | filter:search" class="repeat-animation">
		<td align="center">{{ship.id}}</td>
		<td>{{ship.shipping}}</td>
		<td align="center">
			<md-button ng-click="deleteConfirm(ship.id,'addShipping');">
					<span class="glyphicon glyphicon-remove-circle"></span>
			</md-button>
		</td>
	</tr>
</table>
</div>
</div>
<!-----------------------Shipping Line Table------------------------------>

<!-----------------------Bank Address Table------------------------------>
<div role="tabpanel" id="tab2-content" aria-labelledby="tab2" ng-switch-when="1" md-swipe-left="next()" md-swipe-right="previous()">
<hr/>
	<form name="title" method="POST" action="config/addData.php">
		<input type="text" name="b_name" style="width:250px;" maxlength="50" placeholder="Type Bank name here" class="inp" required/>
		<input type="text" name="b_ABR" style="width:105px;" maxlength="20" placeholder="Abbreviations" class="inp" required/><br/>
		<input type="text" name="b_address" style="width:500px;" maxlength="100" placeholder="Type Bank Detail (Note:  ' , ' = Line break)" class="inp" required/> | 				
		<input type="hidden" name="H_Type" value="b_name_detail"/>
		<md-button class="md-raised" style="width:100px;">
		Add
		</md-button>
		<hr/>
		<input type="text" style="width:250px;" maxlength="50" placeholder="Search Bank name" ng-model="search.bankName"/>
		<hr/>
	</form>
	<div id="addr">
<table border="1">
<tr class="t_r">
	<th>ID</th>
	<th>Bank Name</th>
	<th>Bank Address</th>
	<th>Delete</th>
</tr>
<tr ng-repeat="baf in BankAF | filter:search" class="repeat-animation">
	<td>{{baf.id}}</td>
	<td>{{baf.bankName}}</td>
	<td>{{baf.bankAddr}}</td>
	<td>
		<md-button ng-click="deleteConfirm(baf.id,'b_name_detail');">
					<span class="glyphicon glyphicon-remove-circle"></span>
		</md-button>
	</td>
</tr>
</table>
</div>
</div>
<!-----------------------Bank Address Table------------------------------>
		        
        
<!-----------------------Account Titles Table------------------------------>
<div role="tabpanel" id="tab3-content" aria-labelledby="tab3" ng-switch-when="2" md-swipe-left="next()" md-swipe-right="previous()">
<div id="addr">
<form name="title" method="POST" action="config/addData.php">
	<input type="text" style="width:150px;" maxlength="80" placeholder="Search" ng-model="search.bankAcTitle"/>
	<input type="text" name="addTitles" style="width:400px;" maxlength="80" placeholder="Type here to add new Account Title" class="inp" required/>
	<input type="hidden" name="H_Type" value="actitle"/>
	<md-button class="md-raised" style="width:100px;">
	Add
	</md-button>
</form>
<br/>
<table border="0" width="100%">	
<tr class="t_r">
	<th width="5%">ID</th>
	<th>Account Titles</th>
	<th>Delete</th>
</tr>
<tr ng-repeat="act in acTitle | filter:search" class="repeat-animation">
	<td align="center">{{act.id}}</td>
	<td>{{act.bankAcTitle}}</td>
	<td width="10%;" align="center">
		<md-button ng-click="deleteConfirm(act.id,'actitle');">
				<span class="glyphicon glyphicon-remove-circle"></span>
		</md-button>
	</td>
</tr>
</table>
</div>
</div> 
<!-----------------------Account Titles Table------------------------------>



<!---------------------------Bank Accounts -------------------------------->
<div role="tabpanel" id="tab4-content" aria-labelledby="tab4" ng-switch-when="3" md-swipe-left="next()" md-swipe-right="previous()">
<div id="addr">


<form name="title" method="POST" action="config/addData.php">
<table border="0" style="width:320px;border:3px solid #999;">
<tr>
	<td width="120px">
		<b>Bank</b>
	</td>
	<td width="200px"> :
		<select name="Bank">
		<option value="select">-Select-</option>
		<option  ng-repeat="baf in BankAF">{{baf.bankName}}</option>
		</select>
	</td>
</tr>
<tr>
	<td>
		<b>Account Titles</b>
	</td>
	<td> :
		<select name="ac_Title">
			<option value="select">-Select-</option>
			<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
		</select>
	</td>
</tr>
<tr>
	<td>
		<b>Account Number</b>
	</td>
	<td> :
		<input type="text" name="ac_Num" maxlength="30" placeholder="Account Number" style="margin:0px;" required/>
	</td>
</tr>
<tr>
	<td>
		<b>Abbreviation</b>
	</td>
	<td> :
		<input type="text" name="addr" maxlength="50" placeholder="Abbr" style="width:100px;margin:0px;" required/>
	</td>
</tr>

</table>

<br/>
<input type="hidden" name="H_Type" value="ac_T_Num"/>

	<md-button class="md-raised" style="width:100px;">
	Add
	</md-button>
</form>
<hr>
Bank Name: <input type="text" placeholder="Search by Bank name" ng-model="search.bankName" style="width:170px;"> |  A/C Title : <input type="text" placeholder="Search by Account Title" ng-model="search.bankAcTitle" style="width:170px;">
<hr/>
<table border="1" width="100%">
	<tr class="t_r">
		<td width="4%">ID</td>
		<td width="25%">Bank Name</td>
		<td width="25%">Account Title</td>
		<td width="25%">Account Number</td>
		<td width="15%">Abbreviation</td>
		<td width="6%">Delete</td>
	</tr>
	<tr  ng-repeat='ac_t_n in ac_title_number | filter:search' class="repeat-animation">
		<td>{{ac_t_n.id}}</td>
		<td>{{ac_t_n.bankName}}</td>
		<td>{{ac_t_n.bankAcTitle}}</td>
		<td>{{ac_t_n.bankAcNumber}}</td>
		<td>{{ac_t_n.addr}}</td>
		<td>
			
		<md-button ng-click="deleteConfirm(ac_t_n.id,'acT_N');">
				<span class="glyphicon glyphicon-remove-circle"></span>
		</md-button>
		</td>
	</tr>
</table>

</div> 
</div>
<!---------------------------Bank Accounts -------------------------------->






<!---------------------------Company Registration -------------------------------->
<div role="tabpanel" id="tab5-content" aria-labelledby="tab5" ng-switch-when="4" md-swipe-left="next()" md-swipe-right="previous()">

		<form name="title" method="POST" action="config/addData.php">
				<input type="text" name="com_name" placeholder="Company name" maxlength="50" style="width:300px;" required> <br/>

				<input type="text" name="com_address_1" placeholder="Address Line 1" maxlength="90" style="width:61%;" required> <br/>
				<input type="text" name="com_address_2" placeholder="Address Line 2" maxlength="90" style="width:61%;"> <br/>

				<input type="text" name="com_gst_ger_no" placeholder="GST Reg No." maxlength="50" style="width:20%;" required>
				<input type="text" name="com_cnic" placeholder="CNIC No." maxlength="50" style="width:20%;" required>
				<input type="text" name="com_ntn" placeholder="NTN No." maxlength="50" style="width:20%;" required> <br/>
				
				<br/>
				
				<input type="hidden" name="H_Type" value="com_reg"/>
				<md-button class="md-raised" style="width:100px;">
				Add
				</md-button>
				<hr/>
				<input type="text" placeholder="Search" maxlength="50" style="width:20%;" ng-model='search.com_name'> <hr/>
		</form>

		<br/>
		
<div id="addr">		
<table border="1" width="100%">
	<tr class="t_r">
		<td width="4%">ID</td>
		<td width="25%">Company Name</td>
		<td width="22%">GST Reg No.</td>
		<td width="22%">CNIC No.</td>
		<td width="15%">NTN No.</td>
		<td width="6%">View</td>
		<td width="6%">Delete</td>
	</tr>
	<tr  ng-repeat='c_r in company_reg | filter:search' class="repeat-animation">
		<td>{{c_r.id}}</td>
		<td>{{c_r.com_name}}</td>
		<td>{{c_r.com_gst_ger_no}}</td>
		<td>{{c_r.com_cnic}}</td>
		<td>{{c_r.com_ntn}}</td>
		<td>
			<md-button ng-click="ViewInfo(c_r.com_name,c_r.com_address_1,c_r.com_address_2,c_r.com_gst_ger_no,c_r.com_cnic,c_r.com_ntn);">
			view
			</md-button>
		</td>	
		<td>
		<md-button ng-click="deleteConfirm(c_r.id,'comp_reg');">
				<span class="glyphicon glyphicon-remove-circle"></span>
		</md-button>
		</td>
	</tr>
</table>
</div>		
		
		
		

</div>
<!---------------------------Company Registration -------------------------------->



<!---------------------------Exporter Info -------------------------------->
<div role="tabpanel" id="tab6-content" aria-labelledby="tab6" ng-switch-when="5" md-swipe-left="next()" md-swipe-right="previous()">

		<form name="title" method="POST" action="config/addData.php">
				<input type="text" placeholder="Search" maxlength="100" style="width:200px;" ng-model="search.exp_name">|
				<input type="text" name="exp_name" placeholder="Exporter name" maxlength="100" style="width:300px;" required>
				<input type="text" name="exp_origin" placeholder="Origin" maxlength="50" style="width:100px;" required> 
				
				<input type="hidden" name="H_Type" value="exp_info"/>
				<md-button class="md-raised" style="width:100px;">
				Add
				</md-button>
		</form>

		<br/>
		
<div id="addr">		
<table border="1" width="100%">
	<tr class="t_r">
		<td width="4%">ID</td>
		<td width="25%">Exporter Name</td>
		<td width="22%">Origin</td>
		<td width="6%">Delete</td>
	</tr>
	<tr  ng-repeat='exp_info in exporter_info | filter:search' class="repeat-animation">
		<td>{{exp_info.id}}</td>
		<td>{{exp_info.exp_name}}</td>
		<td>{{exp_info.exp_origin}}</td>

		<td>
		<md-button ng-click="deleteConfirm(exp_info.id,'exp_inf');">
			<span class="glyphicon glyphicon-remove-circle"></span>
		</md-button>
		</td>
	</tr>
</table>
</div>		
		
		
		

</div>
<!---------------------------Exporter Info -------------------------------->




</ng-switch>