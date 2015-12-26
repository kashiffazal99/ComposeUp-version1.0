<?php
$Query = "SELECT * FROM exporter_info";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Exporter info table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array ('id' => $Row['Id'],'exp_name' => $Row['exp_name'],'exp_origin' => $Row['exp_origin']);
	}
	
?>