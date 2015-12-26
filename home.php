<?php
	//Checking to User that , is he login or direct access to URL(s)
	include "config/checkSession.php";
?>

<!doctype HTML>
<html>
<head>
	<title>Office-App</title>
	<?php	include "includes/lib_src.php";	?>
</head>
<body ng-app="offApp">
		<header>	
	<?php	include "includes/header.php";	?>
		</header>
<div id="wrapper">
	
	<table border="1" style="height:100%;">
		<tr>
			<td width="18%" valign="top">
		<div id="nav">
		<br/>
	<center><a href="http://www.technologysolo.tk" target="blank"><img src="img/logo.png" width="200px" style="border:none;"></a></center>
	<br/>
		
		<md-button id="md_but"><a href="#home"><i class="glyphicon glyphicon-home"></i> Home</a></md-button> <br>
		<md-button id="md_but"><a href="#address"><i class="glyphicon glyphicon-file"></i> Customers Addresses</a></md-button> <br>
		<md-button id="md_but"><a href="#payOrder"><i class="glyphicon glyphicon-envelope"></i> Pay Order</a></md-button> <br>
		<md-button id="md_but"><a href="#pay_cancel"><i class="glyphicon glyphicon-remove-circle"></i> Pay Order Cancellation</a></md-button> <br>
		<md-button id="md_but"><a href="#gstReturn"><i class="glyphicon glyphicon-pencil"></i> GST Return</a></md-button> <br>
		<md-button id="md_but"><a href="#checkCreat"><i class="glyphicon glyphicon-pencil"></i> Cheque Creator</a></md-button> <br>
		<md-button id="md_but"><a href="#about"><i class="glyphicon glyphicon-user"></i> About me</a></md-button> <br>

	</div>
			</td>
			<td valign="top">
				<div ng-view id="view" class="reveal-animation" style="overflow: auto;">	
				</div>
			</td>
		</tr>
	</table>

</div>	

	<footer>
	<?php	include "includes/footer.php";	?>
	</footer>

</body>
</html>