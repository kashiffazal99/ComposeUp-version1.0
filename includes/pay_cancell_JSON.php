<?php
$Query = "SELECT * FROM payOrderCan";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<font color='red'>No record found in Pay order Cancellation table | </font>";}
	
	$MySql_Data = array();
	while($Row = mysql_fetch_assoc($q_Result)){	
		$MySql_Data[] = array ('id' => $Row['Id'],'curr_date' => $Row['curr_date'], 'bank' => $Row['bank'], 'bankAddr' => $Row['bankAddr'], 'po_date' => $Row['po_date'], 'amount' => $Row['amount'], 'po_num' => $Row['po_num'], 'ship_line' => $Row['ship_line'], 'acNo' =>  $Row['acNo'], 'ac_title' => $Row['ac_title']);
	}
?>