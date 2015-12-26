<?php
$Query = "SELECT * FROM gst ORDER BY Id DESC";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in GST table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array (
			'ref' => $Row['Id'],
			'name' => $Row['ComName'],
			'Month' => $Row['Month'],
			'ShipBill' => $Row['ShipBill'], 
			'CRN' => $Row['CRN'], 
			'Date' => $Row['Date'], 
			'IncomeTax' => $Row['ITAmo']
		);
	}
?>