<?php
$Query = "SELECT * FROM acTitle";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Account Title Table table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array ('id' => $Row['Id'],'bankAcTitle' => $Row['bankAcTitle']);
	}
?>