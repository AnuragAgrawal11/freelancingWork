<?php 

include 'connect.php';

$query = "insert into appointments (user_id	,appointment,description,date,reminder) values ('".mysql_real_escape_string(stripslashes($_GET['provider_id']))."', '".mysql_real_escape_string(stripslashes($_GET['app_appointment']))."' ,'".mysql_real_escape_string(stripslashes($_GET['app_notes']))."' , '".mysql_real_escape_string(stripslashes($_GET['appointmentdate']))."' , '".mysql_real_escape_string(stripslashes($_GET['reminderdate']))."') " ;	

$exe=mysql_query($query);
//echo $exe;

   	if($exe==1)
	echo "{success:true}";
	else
	echo "{success:false}";
?>