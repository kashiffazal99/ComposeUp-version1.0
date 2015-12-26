<?php
	include "connectDB.php";
	$type = $_POST['H_Type'];

	
	//Start session to use Success or fail message at redirected page
	session_start();

	//Add Account Title to Database --------------------------------- 
	if($type == "actitle"){
		$addacTitle = addslashes($_POST['addTitles']);
		//Query for Inserting Data in PayOrderCancellation Table
		$query = "INSERT INTO acTitle(bankAcTitle)
		VALUES('$addacTitle')";					
		//Query for Inserting Data in PayOrderCancellation Table
		
		//Executing the query 
		if(mysql_query($query,$link)){
			$_SESSION['check'] = "success";
				header('Location: ../edit.php#/miscellaneous');
		}else{
			$_SESSION['check'] = "not";
				header('Location: ../edit.php#/miscellaneous');
			mysql_error();
		}	 
		//Executing the query 
	}
//Add Account Title to Database --------------------------------- 

//-----------------------------------------------------------------------------------------------------------------------------------------

//Add Shipping Line to Database --------------------------------- 
	if($type == "addShipping"){
		$addship = addslashes($_POST['addShipping']);
		//Query for Inserting Data in PayOrderCancellation Table
		$query = "INSERT INTO shipping(shipping)
		VALUES('$addship')";					
		//Query for Inserting Data in PayOrderCancellation Table
		
		//Executing the query 
		if(mysql_query($query,$link)){
			$_SESSION['check'] = "success";
				header('Location: ../edit.php#/miscellaneous');
		}else{
			$_SESSION['check'] = "not";
				header('Location: ../edit.php#/miscellaneous');
			mysql_error();
		}	 
		//Executing the query 
	}
//Add Shipping Line to Database --------------------------------- 
	

//-----------------------------------------------------------------------------------------------------------------------------------------


//Add Bank Detail to Database --------------------------------- 
	if($type == "b_name_detail"){
		$addBD_name = addslashes($_POST['b_name']);
		$addBD_abr = addslashes($_POST['b_ABR']);
		$addBD_address = addslashes($_POST['b_address']);
			//Replacing the ',' to Line Break in Address
			$addBD_address = str_replace(",","<br/>",$addBD_address);
		//Query for Inserting Data in PayOrderCancellation Table
		$query = "INSERT INTO bankAddrFormat(bankName,bankAddr,bankAbr)
		VALUES('$addBD_name','$addBD_address','$addBD_abr')";					
		//Query for Inserting Data in PayOrderCancellation Table
		
		//Executing the query 
		if(mysql_query($query,$link)){
			$_SESSION['check'] = "success";
				header('Location: ../edit.php#/miscellaneous');
		}else{
			$_SESSION['check'] = "not";
				header('Location: ../edit.php#/miscellaneous');
			mysql_error();
		}	 
		//Executing the query 
	}
//Add Bank Detail to Database --------------------------------- 
	
	
//----------------------------------------------------------------------------------------------------------------------------------------------	


//Add Bank Account Number and Titles to Database --------------------------------- 
	if($type == "ac_T_Num"){
		$Bank = addslashes($_POST['Bank']);
		$ac_Title = addslashes($_POST['ac_Title']);
		$ac_Num = addslashes($_POST['ac_Num']);
		$addr = addslashes($_POST['addr']);

		if($Bank == 'select'){die(header('Location: ../edit.php#/miscellaneous'));}
		if($ac_Title == 'select'){die(header('Location: ../edit.php#/miscellaneous'));}
		
//////---------Checking For Duplicate Account-------------------------	
	//Query for Bank Address Table 
	$Query = "SELECT * FROM acT_Number";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());
	if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	
	while($Row = mysql_fetch_assoc($q_Result)){	
		if($Bank == $Row['bankName'] and $ac_Title == $Row['bankAcTitle']){
				$_SESSION['check'] = 'duplicate';
				header('Location: ../edit.php#/miscellaneous');
				die();
		}else if($addr == $Row['addr']){
			$_SESSION['check'] = 'duplicateAbbr';
			header('Location: ../edit.php#/miscellaneous');
			die();
		}
	}
//////---------Checking For Duplicate Account-------------------------	
		
		
		
		
		//Query for Inserting Data in PayOrderCancellation Table
		$query = "INSERT INTO acT_Number(bankName,bankAcTitle,bankAcNumber,addr)
		VALUES('$Bank','$ac_Title','$ac_Num','$addr')";					
		//Query for Inserting Data in PayOrderCancellation Table
		
		//Executing the query 
		if(mysql_query($query,$link)){
			$_SESSION['check'] = "success";
				header('Location: ../edit.php#/miscellaneous');
		}else{
			$_SESSION['check'] = "not";
				header('Location: ../edit.php#/miscellaneous');
			mysql_error();
		}	 
		//Executing the query 
	}
//Add Bank Account Number and Titles to Database --------------------------------- 

//-----------------------------------------------------------------------------------------------------------------------------------------------

//Add Bank Account Number and Titles to Database --------------------------------- 
	if($type == "com_reg"){
		$com_name = addslashes($_POST['com_name']);
		$com_address_1 = addslashes($_POST['com_address_1']);
		$com_address_2 = addslashes($_POST['com_address_2']);
		$com_gst_ger_no = addslashes($_POST['com_gst_ger_no']);
		$com_cnic = addslashes($_POST['com_cnic']);
		$com_ntn = addslashes($_POST['com_ntn']);
		
//////---------Checking For Duplicate Account-------------------------	
	//Query for Bank Address Table 
	$Query = "SELECT * FROM com_reg";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());
	if(mysql_num_rows($q_Result) <= 0){echo "No record found";}
	
	while($Row = mysql_fetch_assoc($q_Result)){	
		if($Bank == $Row['com_name'] and $com_ntn == $Row['com_cnic']){
				$_SESSION['check'] = 'duplicate';
				header('Location: ../edit.php#/miscellaneous');
				die();
		}
	}
//////---------Checking For Duplicate Account-------------------------	
		
		
		
		
		//Query for Inserting Data in PayOrderCancellation Table
		$query = "INSERT INTO com_reg(com_name,com_address_1,com_address_2,com_gst_ger_no,com_cnic,com_ntn)
		VALUES('$com_name','$com_address_1','$com_address_2','$com_gst_ger_no','$com_cnic','$com_ntn')";					
		//Query for Inserting Data in PayOrderCancellation Table
		
		//Executing the query 
		if(mysql_query($query,$link)){
			$_SESSION['check'] = "success";
				header('Location: ../edit.php#/miscellaneous');
		}else{
			$_SESSION['check'] = "not";
				header('Location: ../edit.php#/miscellaneous');
			mysql_error();
		}	 
		//Executing the query 
	}
//Add Bank Account Number and Titles to Database --------------------------------- 

//------------------------------------------------------------------------------------------------------------------------------------

//Add Exporter Information to Database --------------------------------- 
	if($type == "exp_info"){
		$addBD_name = addslashes($_POST['exp_name']);
		$addBD_origin = addslashes($_POST['exp_origin']);
			
		//Query for Inserting Data in exporter_info Table
		$query = "INSERT INTO exporter_info(exp_name,exp_origin)
		VALUES('$addBD_name','$addBD_origin')";					
		//Query for Inserting Data in exporter_info Table
		
		//Executing the query 
		if(mysql_query($query,$link)){
			$_SESSION['check'] = "success";
				header('Location: ../edit.php#/miscellaneous');
		}else{
			$_SESSION['check'] = "not";
				header('Location: ../edit.php#/miscellaneous');
			mysql_error();
		}	 
		//Executing the query 
	}
//Add Exporter Information to Database --------------------------------- 
	
	
//----------------------------------------------------------------------------------------------------------------------------------------------

?>