


<script>
/*
var myDataRef = new Firebase('https://composeup.firebaseio.com/');
//myDataRef.set('User syas this is kashif fazal - 2');
myDataRef.push({name: "kashif", text: "this is demo text - 3"});
*/
</script>








<?php
error_reporting(0);

	$Query = "SELECT * FROM pass";
	$q_Result = mysql_query($Query,$link) or die(mysql_error());

	//Check pass table for empty fields
	if(mysql_num_rows($q_Result) <= 0){die ("<h3><center>No record found</center></h3>");}
	
	//Getting value of pass table
	$Row = mysql_fetch_assoc($q_Result);

?>
<table border="0" style="border:none;width:100%;">
	<tr>
		<td width="40%">
			<a class="a" href="home.php#/"><span class="glyphicon glyphicon-home"></span> Home </a>	|
			<a class="a" href="edit.php#/"><span class="glyphicon glyphicon-edit"></span> Edit </a>	|
			<span class="glyphicon glyphicon-user"> </span> Hi, <?php echo $Row['username'];?>
		</td>
		<td width="20%">
		
		</td>
		<td width="40%"align="right">
		<ul class="drop" >
			<li onClick="toggleDrop();"><button>Setting <span class="glyphicon glyphicon-tasks"></span> </button>
				<ul id="drop">
					<li>
					<?php 
						if($_SESSION['log']=='login'){
							echo"<a href='#' onclick='pinRemove();'> <i class='glyphicon glyphicon-pushpin'> </i> &nbsp; Remove PIN code</a>";							
						}else{
							echo"<a href='#' onclick='pinFunc();'>  <i class='glyphicon glyphicon-pushpin'> </i> &nbsp; Insert PIN code</a>";
						}
					?>				
					</li>
					<li><a href="edit.php#/userAccount"><i class="glyphicon glyphicon-random"> </i> &nbsp; User Account</a></li>
					<li><a href="config/ImportingBackup.php"> <i class="glyphicon glyphicon-import"> </i> &nbsp; Import Backup</a></li>
					<li><a href="config/exportingBackup.php"> <i class="glyphicon glyphicon-export"> </i> &nbsp; Export Backup</a></li>
					<li><a href="config/logout.php"> <i class="glyphicon glyphicon-log-out"> </i> &nbsp; Log Out</a></li>
				</ul>
			</li>
		</ul>
		</td>
	</tr>
</table>


<script>
function pinFunc(){
	swal({
		title: "Administrative Area!",
		text: 'Please insert your secrit PIN code',
		type: 'input',
		inputType: 'password',
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Login',
		cancelButtonText: "Cancel",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(inputValue){
		if(inputValue){
			postPIN(inputValue);
		} else {
			swal("Invalid", "Please Enter a Valid PIN Code", "error");
		}
	});
};





function pinRemove(){
	postPIN('remove');
}



//----------------------Post PIN Code via Function-------------------//
function postPIN(value) {
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "config/pin.php");

    var params = {PIN: value};
    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
};
//----------------------Post PIN Code via Function-------------------//


</script>
<?php
//------Checking session for Add or Delete Alert---------------------//
	
/*<!----------------///////////--Showing-Success-or- Failed-Message-from session--//////////////////---------------------->*/
			
				if($_SESSION['check'] == 'success'){			
					echo "<script>setTimeout(function(){ swal('Added', 'Your record has been save!', 'success'); }, 1500);</script>";
				}else if($_SESSION['check'] == 'not'){
					echo "<script>setTimeout(function(){ swal('Could not delete', 'There are some error, try again', 'error'); }, 1500);</script>";
				}else if($_SESSION['check'] == 'deleted'){
					echo "<script>setTimeout(function(){ swal('Deleted!', 'Your record has been deleted!', 'success'); }, 1500);</script>";
				}else if($_SESSION['check'] == 'duplicate'){
					echo "<script>swal('Duplicate Account', 'Please do not add duplicate account', 'error');</script>";
				}else if($_SESSION['check'] == 'duplicateAbbr'){
					echo "<script>swal('Duplicate Abbreviation', 'Please do not use duplicate abbreviation', 'error');</script>";
				}else if($_SESSION['check'] == 'invalid'){
					echo "<script>setTimeout(function(){ swal('Invalid Account Info', 'User name, Password or PIN Code are incorrect', 'error'); }, 1500);</script>";
				}else if($_SESSION['check'] == 'ExportSeccess'){
					echo "<script>setTimeout(function(){ swal('Export successfully', 'Backup has been taken in your selected directory.', 'success'); }, 1500);</script>";
				}else if($_SESSION['check'] == 'ImportSeccess'){
					echo "<script>setTimeout(function(){ swal('Restore Successfully', 'Backup has been restore successfully.', 'success'); }, 1500);</script>";
				}
			/*<!----------------///////////--Showing-Success-or- Failed-Message-from session--//////////////////---------------------->*/
			
			//Change the Session value to remove any message at refresh//					
			$_SESSION['check'] = '';	

?>