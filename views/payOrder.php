<?php
error_reporting(0);
include "../config/connectDB.php";
session_start();

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


//-------------Getting Cheque Number from Text file----------------//
$fp = fopen("../txt_files/chNum.txt","r");
	if(!$fp) die("File could not be searched");
	$chN = (int) fgets($fp,10);
	fclose($fp);
//-------------Getting Cheque Number from Text file----------------//


?>
	<md-button style="float:right;border:1px solid green;" href="#payOrder_List">
		Old records
	</md-button>
<h1>
Pay Order Letters
</h1>

<hr/>
<div id="payOrderLetter">
<div id="top_table">
	
		<div style="float:left;">

			<select ng-model="nCount" style="width:35px;height:36px;">
				<option value="10">2</option>
				<option value="20">3</option>
				<option value="30">4</option>
				<option value="40">5</option>
				<option value="50">6</option>
				<option value="60">7</option>
				<option value="70">8</option>
				<option value="80">9</option>
				<option value="90">10</option>
			</select>
			
			<md-button id="md-raised" class="md-raised" style="width:35px;border:1px solid #999;" ng-click="nCount = 0">
			0
			</md-button>

			<md-button id="md-raised" class="md-raised" style="width:auto;border:1px solid #999;" ng-click="get()">
			Add All
			</md-button>
			|
			
		<input type="text" name="total"
		value="Total : {{total_1 + total_2 + total_3 + total_4 + total_5 + total_6 + total_7 + total_8 + total_9 + total_10 | number}}"
		disabled/>
			|
			
			<input type="text" ng-init="cheque='<?php echo $chN;?>'" maxlength="20" placeholder="Cheque Number" ng-model="cheque">  
			|
			<b>Select Account</b>
			<select style="width:120px;" ng-model="b_a" name="nibCheck"> 
				<option ng-repeat='ac_t_n in ac_title_number'>{{ac_t_n.addr}}</option>
			</select>			
			|			 
			<input kendo-date-picker
			 k-format="'dd-MM-yyyy'" 
			 maxlength="30" placeholder="Date" ng-model="date"
			 style="font-size:13px"
			 />
			
		</div>
			|
		
			<md-button id="md-raised" class="md-raised" style="width:auto;height:35px;border:1px solid #999;padding:0px 4px;" ng-click="ShowTr()">
			Add Fields
			</md-button>
			
			<md-button id="md-raised" class="md-raised" style="width:auto;height:35px;border:1px solid #999;padding:0px 4px;" ng-click="HideTr()">
			<i class="glyphicon glyphicon-remove-circle"></i>
			</md-button>

</div>


		<form action="config/payOrderLetter.php" method="POST">	

		
			
		
		
		<input name="date" type="hidden" value="{{date}}">
		<input name="che_num" type="hidden" value="{{cheque}}">
		<input name="bank_Account" type="hidden" value="{{b_a}}">

		<input type="hidden" style="float:left;" name="total_hidd"
		value="{{total_1 + total_2 + total_3 + total_4 + total_5 + total_6 + total_7 + total_8 + total_9 + total_10 | number}}"
		/>

		<center style="margin-top:10px;">
		<?php 
		if($_SESSION['Pay_Error'] == 'empty'){ echo "<font color='red'><b>Error : Invalid Input</b></font><hr/>"; $_SESSION['Pay_Error']='none';}
			elseif($_SESSION['Pay_Error'] == 'cheque'){echo "<font color='red'><b>Error : Please insert cheque number</b></font><hr/>"; $_SESSION['Pay_Error']='none';}
			elseif($_SESSION['Pay_Error'] == 'bank'){echo "<font color='red'><b>Error : Please select the account</b></font><hr/>"; $_SESSION['Pay_Error']='none';}
			elseif($_SESSION['Pay_Error'] == 'date'){echo "<font color='red'><b>Error : Please select date</b></font><hr/>"; $_SESSION['Pay_Error']='none';}
		?>	
		</center>




<table border="0">
	<tr>
		<td><b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Shipping Lines
		</b></td>
		<td><b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Account Title
		</b></td>
		<td><b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Amount
		</b></td>
	</tr>
	<tr>
		<td>1- &nbsp;
			<select name="shipping_1"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_1">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_1" ng-model="total_1" maxlength="30"/>
			<hr/>	
		</td>	
	</tr>
	
	<tr ng-show="counter >= 10 || kk >= 10">
		<td>2- &nbsp;
			<select name="shipping_2"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_2">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_2" ng-model="total_2" maxlength="30"/>
		<hr/>
		</td>		
	</tr>
	<tr ng-show="counter >= 20 || kk >= 20">
		<td>3- &nbsp;
			<select name="shipping_3"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_3">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_3" ng-model="total_3" maxlength="30"/>
		<hr/>
		</td>		
	</tr>	
	<tr ng-show="counter >= 30 || kk >= 30">
		<td>4- &nbsp;
			<select name="shipping_4"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_4">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_4" ng-model="total_4" maxlength="30"/>
		<hr/>
		</td>	
	</tr>	
	<tr ng-show="counter >= 40 || kk >= 40">
		<td>5- &nbsp;
			<select name="shipping_5"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_5">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_5" ng-model="total_5" maxlength="30"/>
		<hr/>
		</td>	
	</tr>
	<tr ng-show="counter >= 50 || kk >= 50">
		<td>6- &nbsp;
			<select name="shipping_6"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_6">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_6" ng-model="total_6" maxlength="30"/>
		<hr/>
		</td>	
	</tr>	
	<tr ng-show="counter >= 60 || kk >= 60">
		<td>7- &nbsp;
			<select name="shipping_7"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_7">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_7" ng-model="total_7" maxlength="30"/>
		<hr/>
		</td>	
	</tr>	
	<tr ng-show="counter >= 70 || kk >= 70">
		<td>8- &nbsp;
			<select name="shipping_8"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_8">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_8" ng-model="total_8" maxlength="30"/>
		<hr/>
		</td>	
	</tr>
	<tr ng-show="counter >= 80 || kk >= 80">
		<td>9- &nbsp;
			<select name="shipping_9"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_9">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_9" ng-model="total_9" maxlength="30"/>
		<hr/>
		</td>	
	</tr>
	<tr ng-show="counter >= 90 || kk >= 90">
		<td>10- 
			<select name="shipping_10"> 
				<option value="select">-Select-</option>
				<option ng-repeat="ship in shipping">{{ship.shipping}}</option>
			</select>
			<hr/>
		</td>		
		<td> A/C 
			<select name="acTitle_10">
				<option value="select">-Select-</option>
				<option ng-repeat="act in acTitle">{{act.bankAcTitle}}</option>
			</select>
			<hr/>
		</td>
		<td>	
		Rs. <input type="number" name="payAmount_10" ng-model="total_10" maxlength="30"/>
		<hr/>
		</td>	
	</tr>
</table>
<md-button id="md-raised" class="md-raised" style="width:150px;border:1px solid #999;margin-top:10px;">Submit and create</md-button> 
</form>
</div>