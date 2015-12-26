<?php 

	include "connectDB.php";
	//Start session to use Success or fail message at redirected page
	session_start();
	
	$c_name = addslashes($_POST['c_name']);
	$c_address = addslashes($_POST['c_address']);
	$c_city = addslashes($_POST['c_city']);
	$c_phone = addslashes($_POST['c_phone']);
	$c_mob = addslashes($_POST['c_mob']);
	$c_other = addslashes($_POST['c_other']);

	$c_name 	= str_replace("C/O","<br/> C/O",$c_name);
	$c_name 	= str_replace("c/o","<br/> C/O",$c_name);
	$c_phone 	= str_replace(",","<br/>",$c_phone);
	$c_mob		 = str_replace(",","<br/>",$c_mob);
	
	
/* 	echo $c_name."</br>";
	echo $c_address."</br>";
	echo $c_city."</br>";
	echo $c_phone."</br>";
	echo $c_mob."</br>";
	echo $c_other."</br>"; */
	
	
			$query = "INSERT INTO custAddress(name,address,city,phone_num,mob_num,other)
						VALUES('$c_name','$c_address','$c_city','$c_phone','$c_mob','$c_other')";				
	if(mysql_query($query,$link)){
		$_SESSION['check'] = "success";
		header('Location: ../edit.php#/address');
		//echo "Data saved";
	}else{
		//echo "could not be saved";
		$_SESSION['check'] = "not";
		header('Location: ../edit.php#/address');
		mysql_error();
	}	
	
	
?>