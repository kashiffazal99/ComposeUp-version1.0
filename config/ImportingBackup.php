<?php
error_reporting(0);
session_start();
		//Checking PIN Session.
		if(!($_SESSION['log'] == "login")){
			$_SESSION['log'] == 'undefined';
		}
		
		if($_SESSION['log'] == "login"){
		}else{
			//session_destroy();
			//$_SESSION[] = array();
			header('Location: pin.php?er=er');
		}
?>
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>				<!--Bootstrap Lib-->
<style type="text/css">
	body{
		background-color:#ededed;
	}

	form{
	background-color:#dad8d8;
	border:3px dashed #999;
	width:350px;
	margin:0 auto;
	padding:0px 50px;
	padding-top:30px;
	padding-bottom:60px;
	margin-top:50px;
	border-radius:15px;
	}
</style>

<form enctype="multipart/form-data"  action="importingBackup.php" method="POST">

<center><img src="../img/logo.png" width="200px" style="border:none;"></center>
	<h3 align="center">Select your backup file</h3>
	<hr/>
    <input  name="userfile" type="file" />
	<br/>
    <input class="btn btn-default" type="submit" value="Submit" />
	<hr/>
	<a class="btn btn-primary" href="../home.php#/">Back</a>
</form>
<br/>
<?php

function importDB($filename,$mysql_host,$mysql_username,$mysql_password,$mysql_database){
 // Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());
 
// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
    // Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;
 
    // Add this line to the current segment
    $templine .= $line;
    // If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';')
    {
        // Perform the query
        mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
        // Reset temp variable to empty
        $templine = '';
    }
}

}

//echo $filename = $_POST['userfile'];

 $file_name = $_FILES['userfile']['name'];
 //ECHO $file_name;
 //ECHO "<br/>";
 $file_tmp_name = $_FILES['userfile']['tmp_name'];
// ECHO $file_tmp_name;
// ECHO "<br/>";
 $file_size = $_FILES['userfile']['size'];
// ECHO $file_size;
 //ECHO "<br/>";
 $file_type = $_FILES['userfile']['type'];
// ECHO $file_type;
 //ECHO "<br/>";
 
 //if file is empty
 if($file_size <= 0){
	die('<center>Can not upload empty file</canter>');
 }
 
 //if file is not SQL type
 if(!($file_type == "application/octet-stream")){
	die('<center>This is not Database file</center>');
 }
 
 //checking that file is uploaded via http poet method
 if(is_uploaded_file($file_tmp_name)){
	//copy that uploaded file to our main folder
	if(!move_uploaded_file($file_tmp_name,$file_name)){
			die("<center>cannot copy file $file_name</center>");
	}
 }else{
	//die("Possible file upload attack:");
 }
 
//echo $filename = $_POST['userfile'];
importDB($file_name , "localhost" ,"kashifdb","123456","composeup");

 unlink($file_name);
 $_SESSION['check'] = "ImportSeccess";
 header('Location: ../edit.php#/')
 
?>