<?php
	//Checking to User that , is he login or direct access to URL(s)
	include "config/checkSession.php";
	include "config/sessionPIN.php";
?>
<!doctype HTML>
<html>
<head>
	<title>Office-App</title>
	<?php	include "includes/lib_src.php";	?>

	<script src="js/modules/module_editApp.js"></script>	
	<script src="js/controllers/editapp_Controler.js"></script>	
</head>
<body ng-app="editApp">
		<header>	
			<?php	include "includes/header.php";	?>
		</header>
<div id="wrapper">
	
	<table border="1" style="height:100%;">
		<tr>
			<td width="18%" valign="top">
				<div id="nav">
	<center><a href="http://www.technologysolo.tk" target="blank"><img src="img/stamp.png" width="100" style="border:none;"></a></center>
		
		<md-button id="md_but"><a href="#miscellaneous"><i class="glyphicon glyphicon-user"></i> Title of Accounts</a></md-button> <br>
		<md-button id="md_but"><a href="#address"><i class="glyphicon glyphicon-file"></i> Customers Addresses</a></md-button> <br>
		<md-button id="md_but"><a href="#payOrderLetterEdit"><i class="glyphicon glyphicon-envelope"></i> Pay Order</a></md-button> <br>
		<md-button id="md_but"><a href="#payCancelEdit"><i class="glyphicon glyphicon-remove-circle"></i> Pay Order Cancellation</a></md-button> <br>
		<md-button id="md_but"><a href="#gstEdit"><i class="glyphicon glyphicon-pencil"></i> GST Return</a></md-button> <br>
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