<html>
<head>
<title>Login</title>
<!--Starts-AngulsrJS Materials--CDN Packages-->  
<link rel="stylesheet" href="lib/ang_mat/angular-material.min.css">
<script src="lib/ang_mat/hammer.min.js"></script>
<script src="lib/ang_mat/angular.min.js"></script>
<script src="lib/ang_mat/angular-animate.min.js"></script>
<script src="lib/ang_mat/angular-aria.min.js"></script>
<script src="lib/ang_mat/angular-material.min.js"></script>
<!--End-AngulsrJS Materials--CDN Packages-->  
<script>angular.module('buttonsDemo1', ['ngMaterial'])</script>	

<style type="text/css">
body{
	font-family:tahoma;
	width:1024px;
	//border:1px solid red;
	margin:0 auto;
	margin-top:20px;
	background:URL('img/log-back.jpg');
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-size:100% 100%;
	color:#fff;
}

label{
	//border:1px solid red;
	font-family:arial;
	font-size:40px;
	font-weight:bold;
	color:#fff;
}

table{
	width:100%;
	height:100%;
}

input[type='text'], input[type='password']{
	//border:1px solid red;
	border-radius:2px;
	border:none;
	width:250px;
	height:30px;
	padding:0 5px;
	margin:2 0px;
	opacity:0.5;
	transition: opacity 320ms;
}

input[type='text']:hover, input[type='password']:hover,
input[type='text']:focus, input[type='password']:focus
{
	opacity:1;
}

#md-raised{
	width:100px;
	border:1px solid #999;
	border-radius:2px;
	background: #103f98;
	color:#fff;
	margin:2px 0px;
}

#md-raised:hover{
	background: #1d59c7;
}

</style>
</head>
<body ng-app="buttonsDemo1">
<table border="0">
	<tr>
		<td height="40%" valign="top" align="center">
				<label><img src="img/logo.png" width="400px"></label>
		</td>
	</tr>
	<tr>
		<td height="60%" valign="top">
			<label>Login:</label>
				<form action="config/login.php" method="POST">
					<table border="0"  width="1024px">
						<tr>
							<td align="right"  width="150px">User name :</td>
							<td><input type="text" name="username" placeholder="User name"/></td>
						</tr>
						<tr>
							<td align="right">Password : </td>
							<td><input type="password" name="password" placeholder="Password"/> </br></td>
						</tr>
						<tr>
							<td></td>
							<td>
								
									<md-button id="md-raised" class="md-raised" style="width:250px;">Login</md-button>
								
								<br>
<?php
error_reporting(0);
$error = $_GET['er'];
if($error == "er"){	echo "<font color='red'>Invalid user name or password</font>"; }
?>
							</td>
						</tr>
					</table>
				</form>			
		</td>
	</tr>
</table>

</body>
</html>

<?php
?>