<?php
$lhostDB = "localhost";
$userDB = "kashifdb";
$passDB = "123456";
//Connect to MySQL-Server	
	if($link = mysql_connect( $lhostDB , $userDB , $passDB )){
		//print "Connected to Server";
	}else{
			die("Cannot connect to server. <br>\n".mysql_error());
	}

//Connection to Database
	if(mysql_select_db("composeup",$link)){
		//print "Database has been selected";
	}else{
		print(mysql_error());
	}	
?>