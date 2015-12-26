<h1>User Account Management</h1>
<hr/>
<form action="config/userAccount.php" method="POST">

<table border="0" style="width:750px;">
	<tr>
		<td valign="top" width="350px">
		<u><b>Change User name</b></u><br/><br/>
<table border="0" style="width:350px;">
	<tr>
		<td width="130px;">Current User</td>
		<td>: <input type="text" name="cuser" required></td>
	</tr>
	<tr>
		<td>New User</td>		
		<td>: <input type="text" name="nuser" required></td>
	</tr>
</table>

<br/><br/>

<u><b>Change Password</b></u><br/><br/>
<table border="0" style="width:350px;">
	<tr>
		<td width="130px;">Current Password</td>
		<td>: <input class="inp" type="Password" name="cpass" style="width:150px;" required></td>
	</tr>
	<tr>
		<td>New Password</td>		
		<td>: <input class="inp" type="Password" name="npass" style="width:150px;" required></td>
	</tr>
</table>

<br/>
<br/>


<b><u>Change PIN Code</u></b>
	

<br/>
<br/>



<table border="0" style="width:350px;">
	<tr>
		<td width="130px;">Current PIN</td>
		<td>: <input class="inp" type="Password" name="cpin" style="width:150px;" required></td>
	</tr>
	<tr>
		<td>New PIN</td>		
		<td>: <input class="inp" type="Password" name="npin" style="width:150px;" required></td>
	</tr>
</table>


<br/>
<br/>
<md-button >Submit</md-button>


		</td>
		<td align="center" style="border-left:1px solid #c2c2c2;padding-left:20px;">

		<img src="img/accounts.png" width="250px"><br/>
		</td>
	</tr>
</table>







</form>