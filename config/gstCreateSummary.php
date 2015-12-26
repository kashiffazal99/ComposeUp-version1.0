<?php
//error_reporting(0);
include "connectDB.php";

$month = $_GET['month'];
$com = $_GET['com'];

$Query = "SELECT * FROM gst WHERE Month='$month' and ComName='$com'";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){echo "<h2 style='color:red;margin-top:100px;'><u><center>No record found</center></u></h2>";}
?>

<html>
	<head>
		<title><?php echo $month ?> Summary</title>
		<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
		<link href="../css/gst_print.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	<h2 align="center">GST Summary</h2>
	<h4 align="center"><b><?php echo $com; ?></b></h4>
	<h4 align="center">For the Month of <b><?php echo $month; ?></b></h4>
		<table border='1' border='1' width='70%' align='center'>
		<tr class='th_color'>
			<th>Ref #</th>
			<th>Date</th>
			<th>CRN</th>
			<th>Landed Cost</th>
			<th>Average Sale</th>
		</tr>
	<?php
	$total_LC = 0;
	$total_LA = 0;
		while($Row = mysql_fetch_assoc($q_Result)){
			echo "
			<tr>
				<td align='center'>".$Row['Id']."</td>
				<td align='center'>".$Row['Date']."</td>
				<td align='center'>".$Row['CRN']."</td>
				<td align='center'>".number_format(($Row['LandedCost'] + $Row['CDAmo']),2)."</td>
				<td align='center'>".number_format($Row['LandedAll'],2)."</td>
			</tr>
			";
			$total_LC = $total_LC + ($Row['LandedCost'] + $Row['CDAmo']);
			$total_LA = $total_LA + $Row['LandedAll'];
		}
	?>
	<tr>
			<td align='center' colspan="3"><font size="4px"><b>Total</b></font></td>
			<?php
				//Rounding Up the values
				$total_LC = ceil($total_LC);
				$total_LA = ceil($total_LA);
				//Rounding Up the values
			?>
			<td align='center'><font size="3px"><b><?php echo number_format($total_LC,2);?></font></b></td>
			<td align='center'><font size="3px"><b><?php echo number_format($total_LA,2);?></b></font></td>
	</tr>
	<tr>
		<td colspan="5">
			<?php
				//Calculating Number Range for GST Submit
				$number = $total_LC / 500000;
				echo "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Number Range : </b>";
				echo ceil($number);
				echo "<br/><br/>";
				
	
				
			?>
		</td>
	</tr>
		</table>
		
	</body>
</html>