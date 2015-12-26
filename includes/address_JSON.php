<?php
$Query = "SELECT * FROM custAddress";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Customers Address table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
	$convert_name = str_replace("<br/>","<br/>",$Row['name']);
	$convert_nameOutBr = str_replace("<br/>","",$Row['name']);
	$convert_phon = str_replace("<br/>","<br/>",$Row['phone_num']);
	$convert_mob = str_replace("<br/>","<br/>",$Row['mob_num']);
		$MySql_Data[] = array ('id' => $Row['Id'],'name' => $convert_name,'namebr' => $convert_nameOutBr, 'city' => $Row['city'], 'address' => $Row['address'], 'phone' => $convert_phon, 'mob' => $convert_mob, 'other' => $Row['other']);
	}
?>