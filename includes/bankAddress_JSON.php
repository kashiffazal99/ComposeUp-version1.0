<?php
$Query = "SELECT * FROM bankAddrFormat";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Bank Address table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$convert_addr1 = str_replace("<br/>","",$Row['bankAddr']);
		$convert_addr2 = str_replace("<br>","",$convert_addr1);
		$MySql_Data[] = array ('id' => $Row['Id'],'bankName' => $Row['bankName'], 'bankAddr' => $convert_addr2, 'bankAbr' => $Row['bankAbr']);
	}
?>


