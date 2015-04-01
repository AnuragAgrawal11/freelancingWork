<?php 

include 'connect.php';

$query = "insert into device_registration (provider_id,device_token) values ('".mysql_real_escape_string(stripslashes($_GET['provider_id']))."', '".mysql_real_escape_string(stripslashes($_GET['device_token']))."') " ;	

$exe=mysql_query($query);
//echo $exe;

   	if($exe==1)
	echo "{success:true}";
	else
	echo "{success:false}";
?>