<?php
	$date = $_POST['date'];
	$pay = $_POST['pay'];
	if(!($pay == "")){$pay = "*".$_POST['pay'];}
	$amount = $_POST['amount'];
	$cAmount = number_format($amount);
	$hide_field = $_POST['hide_field'];
	//$amount = ucfirst($word); // To capitalize first letter
	//echo "Amount : $amount <br> Word : $word";
	$date_d_1 = substr($date,0,1);
	$date_d_2 = substr($date,1,1);
	$date_m_1 = substr($date,3,1);
	$date_m_2 = substr($date,4,1);
	$date_y_1 = substr($date,6,1);
	$date_y_2 = substr($date,7,1);
	$date_y_3 = substr($date,8,1);
	$date_y_4 = substr($date,9,1);
	
	//echo $date_d_1.$date_d_2."/".$date_m_1.$date_m_2."/".$date_y_1.$date_y_2.$date_y_3.$date_y_4;
	
?>
<html>
	<head>
		<title>Creating Cheques</title>
		<script src='../js/num.js' type='text/javascript'></script>
	<style type="text/css">
	body{
		font-family: Arial;
	}
	table tr td{
		font-size:14px;
		//border:1px solid red;
	}
	
	#nib{
	//border:1px groove red;
	width:5.7in;
	height:2.5in;
	transform: rotate(90deg); /* Standard syntax */
	margin:160px auto;
		}

	#faysal{
	//border:1px groove red;
	width:5.7in;
	height:2.5in;
	transform: rotate(90deg); /* Standard syntax */
	margin:160px auto;
		}

	#ubl{
	//border:1px groove red;
	width:5.7in;
	height:2.5in;
	transform: rotate(90deg); /* Standard syntax */
	margin:160px auto;
		}

	#alfalah{
	//border:1px groove red;
	width:5.7in;
	height:2.5in;
	transform: rotate(90deg); /* Standard syntax */
	margin:160px auto;
		}	
		
	#mcb{
	//border:1px groove red;
	width:5.7in;
	height:2.5in;
	transform: rotate(90deg); /* Standard syntax */
	margin:165px auto;
		}

	#meezan{
	//border:1px groove red;
	width:5.9in;
	height:2.5in;
	transform: rotate(90deg); /* Standard syntax */
	margin:170px auto;
		}

	#askari{
	//border:1px groove red;
	width:5.9in;
	height:2.5in;
	transform: rotate(90deg); /* Standard syntax */
	margin:150px auto;
		}

	#alhabib{
	//border:1px groove red;
	width:5.9in;
	height:2.7in;
	transform: rotate(90deg); /* Standard syntax */
	margin:150px auto;
		}

	textarea{
		width:90%;	
		border:none;
		//border:	1px solid red;
		resize: none;
		line-height:25px;
		font-family: Arial;
		font-size:14px;
	}
	</style>
	</head>
<body onload="get(<?php echo $amount ?>);">



<?php
//--------------------------------------NIB Bank--------------------------------------------------//
if($hide_field == "nib"){
	echo "<div id='nib'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='70%'></td>
					<td width='30%'></td>
				</tr>
				<tr height='30px;' align='right'>
					<td></td>
					<td align='left'>
					&nbsp; $date_d_1 &nbsp; $date_d_2 &nbsp;&nbsp; $date_m_1 &nbsp; $date_m_2 &nbsp; $date_y_1 &nbsp; $date_y_2 &nbsp; $date_y_3 &nbsp; $date_y_4
				</tr>
				<tr height='30px;'>
					<td valign='bottom'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$pay
					</td>
					<td></td>
				</tr>
				<tr height='30px;' >
					<td>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word'></textarea>
					</td>
					<td valign='top' style='padding-top:6px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-
					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}


//--------------------------------------Faysal Bank--------------------------------------------------//
if($hide_field == "faysal"){
	echo "<div id='faysal'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='71%' height='63px;'></td>
					<td width='29%'>
					$date_d_1 &nbsp; $date_d_2 &nbsp;&nbsp; $date_m_1 &nbsp; $date_m_2 &nbsp; $date_y_1 &nbsp; $date_y_2 &nbsp; $date_y_3 &nbsp; $date_y_4
					</td>
				</tr>
				<tr height='30px;'>
					<td valign='bottom' height='3px'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$pay
					</td>
					<td></td>
				</tr>
				<tr height='30px;'>
					<td style='padding-top:5px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word'></textarea>
					</td>
					<td valign='top' style='padding-top:10px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}

//--------------------------------------UBL Bank--------------------------------------------------//
if($hide_field == "ubl"){
	echo "<div id='ubl'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='70%' height='55px;'></td>
					<td width='30%'></td>
				</tr>
				<tr height='50px;'>
					<td valign='bottom' height='3px'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$pay
					</td>
					<td valign='top' style='padding-top:15px;'>
					&nbsp; $date_d_1 &nbsp; $date_d_2 &nbsp;&nbsp; $date_m_1 &nbsp; $date_m_2 &nbsp;&nbsp; $date_y_1 &nbsp; $date_y_2 &nbsp; $date_y_3 &nbsp; $date_y_4
					</td>
				</tr>
				<tr height='30px;'>
					<td style='padding-top:3px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word'></textarea>
					</td>
					<td valign='top' style='padding-top:5px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-

					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}


//--------------------------------------Alfalah Bank--------------------------------------------------//
if($hide_field == "alfalah"){
	echo "<div id='alfalah'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='69%' height='35px;'></td>
					<td width='31%'></td>
				</tr>
				<tr height='50px;'>
					<td valign='bottom' height='68px'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					$pay
					</td>
					<td valign='top' style='padding-top:12px;'>
					&nbsp;&nbsp; $date_d_1 &nbsp; $date_d_2 &nbsp;&nbsp; $date_m_1 &nbsp; $date_m_2 &nbsp;&nbsp; $date_y_1 &nbsp; $date_y_2 &nbsp; $date_y_3 &nbsp; $date_y_4
					</td>
				</tr>
				<tr height='30px;'>
					<td style='padding-top:2px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word'></textarea>
					</td>
					<td valign='top' style='padding-top:5px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-

					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}


//--------------------------------------MCB Bank--------------------------------------------------//
if($hide_field == "mcb"){
	echo "<div id='mcb'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='68%' height='35px;'></td>
					<td width='32%'></td>
				</tr>
				<tr height='50px;'>
					<td valign='bottom' height='68px'>
					&nbsp;&nbsp;&nbsp;&nbsp;
					$pay
					</td>
					<td valign='top' style='padding-top:12px;'>
					&nbsp;&nbsp; $date_d_1 &nbsp; $date_d_2 &nbsp;&nbsp; $date_m_1 &nbsp; $date_m_2 &nbsp;&nbsp; $date_y_1 &nbsp; $date_y_2 &nbsp; $date_y_3 &nbsp; $date_y_4
					</td>
				</tr>
				<tr height='30px;'>
					<td style='padding-top:2px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word'></textarea>
					</td>
					<td valign='top' style='padding-top:5px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-

					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}

//--------------------------------------Meezan Bank--------------------------------------------------//
if($hide_field == "meezan"){
	echo "<div id='meezan'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='68%' height='92px;' valign='bottom'>
						&nbsp;&nbsp;&nbsp;&nbsp;
						$pay
					</td>
					<td width='32%' valign='top' style='padding-top:25px;'>
						&nbsp;&nbsp;&nbsp; $date_d_1 &nbsp; $date_d_2 &nbsp;&nbsp; $date_m_1 &nbsp; $date_m_2 &nbsp;&nbsp; $date_y_1 &nbsp; $date_y_2 &nbsp; $date_y_3 &nbsp; $date_y_4
					</td>
				</tr>
				<tr height='30px;'>
					<td style='padding-top:2px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word'></textarea>
					</td>
					<td valign='top' style='padding-top:5px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-

					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}

//--------------------------------------Askari Bank--------------------------------------------------//
if($hide_field == "askari"){
	echo "<div id='askari'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='68%' height='88x;' valign='bottom'>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						$pay
					</td>
					<td width='32%' valign='top' style='padding-top:40px;'>
						$date_d_1$date_d_2/$date_m_1$date_m_2/$date_y_1$date_y_2$date_y_3$date_y_4
					</td>
				</tr>
				<tr height='30px;'>
					<td style='padding-top:5px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word'></textarea>
					</td>
					<td valign='top' style='padding-top:7px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-

					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}

//--------------------------------------Al-Habib Bank--------------------------------------------------//
if($hide_field == "alhabib"){
	echo "<div id='alhabib'>
			<table border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tr height='30px;'>
					<td width='64%' height='88x;' valign='bottom'>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						$pay
					</td>
					<td width='36%' valign='top' style='padding-top:5px;'>
						&nbsp;&nbsp;&nbsp;&nbsp;
						$date_d_1$date_d_2/$date_m_1$date_m_2/$date_y_1$date_y_2$date_y_3$date_y_4
					</td>
				</tr>
				<tr height='30px;'>
					<td style='padding-top:5px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea id='word' style='width:80%;'>
					</textarea>
					</td>
					<td valign='top' style='padding-top:30px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					*$cAmount/-

					</td>
				</tr>	
				<tr height='30px;'>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>";
}

?>
</body>

		