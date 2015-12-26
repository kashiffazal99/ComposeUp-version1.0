<?php
include "connectDB.php";
error_reporting(0);
$id = $_GET['id'];
$Query = "SELECT * FROM custAddress WHERE id = $id";
$q_Result = mysql_query($Query,$link) or die(mysql_error());
if(mysql_num_rows($q_Result) <= 0){die ("No record found");}
$Row = mysql_fetch_assoc($q_Result);

 	$name 		= $Row['name'];
	$address 	= $Row['address'];
	$city 		= $Row['city'];
	$phone 		= $Row['phone_num'];
	$mob 		= $Row['mob_num'];
	

?>


<html>
	<head>
		<title>Creating Cheques</title>
	</head>
	<style type="text/css">
	#rotate{
	//border:1px groove red;
	width:550px;
	height:5.2in;
	transform: rotate(90deg); /* Standard syntax */
	margin:50px auto;
	//margin-top:100px;
	font-family:tahoma;
	}
	</style>
<body>

<div id="rotate">
<table border="0" width="100%" height="100%">
	<tr>
		<td valign="top" height="50%" width="40%">

		</td>
		<td width="60%">
				<br/>
			To, <br/>
			<?php
			echo "<b>".$name."</b><br/>";
			echo $address.",<br/>";
			echo $city.",<br/>";
			?>
			<table>
				<tr>
					<?php if(!($phone == "")){echo "<td valign='top'><b>Ph # </b></td> <td>".$phone."</td>";}?>
				</tr>
				<tr>
					<?php if(!($mob == "")){echo "<td valign='top'><b>Mob # </b></td> <td>".$mob."</td>";}?>
				</tr>
			</table>


		</td>
	</tr>
	<tr>
		<td valign="bottom" height="50%" colspan="2">
		From,
		<br/>
		<br/>
			<table border="0" width="100%" height="35%">
				<tr>
					<td width="42%" valign="top"></td>
					<td width="58%" style="border-left:1px solid #000;font-size:12px; padding-left:5px;">
						7-17 Rafiq Mansion 				<br/>
						Near Al-Momin Plaza, 			<br/>
						Campbell Road Off Burns Road 	<br/>
						Karachi 74200, Pakistan
						
					</td>
				</tr>
			</table>

		</td>
	</tr>
</table>


</div>	

</body>
</html>
<?php 
	$src = $_GET['src'];
	if($src == 'edit'){
		echo "
				<script type='text/javascript'>
				window.print();
				window.location.href='../edit.php#/address';		
				</script>		
		";
		
	}else{
		echo "
				<script type='text/javascript'>
				window.print();
				window.location.href='../home.php#/address';
				</script>		
		";
	}
?>
