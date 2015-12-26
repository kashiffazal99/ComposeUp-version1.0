<?php
$Query = "SELECT * FROM payOrderLetter";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Pay Order table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array ('id' => $Row['Id'],'date' => $Row['date'],'cheque_num' => $Row['cheque_num'],'totalAmount' => $Row['totalAmount'],'count' => $Row['count'],'bankName' => $Row['bankName'],'bankAcTitle' => $Row['bankAcTitle']);
	}
	
?>