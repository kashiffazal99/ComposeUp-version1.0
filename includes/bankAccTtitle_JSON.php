<?php
$Query = "SELECT * FROM acT_Number";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Bank Account Title table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array ('id' => $Row['Id'],'bankName' => $Row['bankName'], 'bankAcTitle' => $Row['bankAcTitle'], 'bankAcNumber' => $Row['bankAcNumber'], 'addr' => $Row['addr']);
	}
?>