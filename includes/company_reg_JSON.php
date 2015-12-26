<?php
$Query = "SELECT * FROM com_reg";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Company Registration table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array (
			'id' => $Row['Id'],
			'com_name' => $Row['com_name'], 
			'com_address_1' => $Row['com_address_1'], 
			'com_address_2' => $Row['com_address_2'],
			'com_gst_ger_no' => $Row['com_gst_ger_no'], 
			'com_cnic' => $Row['com_cnic'], 
			'com_ntn' => $Row['com_ntn']);
	}
?>


