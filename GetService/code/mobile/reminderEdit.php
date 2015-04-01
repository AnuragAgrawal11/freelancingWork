<?php
include 'connect.php';
//$accepted_time = date('d-m-Y H:i:s');
//echo $accepted_time;
$query1 = "UPDATE appointments SET appointment= '".$_GET['app_appointment']."',description='".$_GET['app_notes']."',date='".$_GET['appointmentdate']."',reminder='".$_GET['reminderdate']."' WHERE user_id='".$_GET['provider_id']."' AND id='".$_GET['rem_id']."'";
$exe1=mysql_query($query1);
//echo $exe1;

	//echo 'updated';
	if($exe1 ==1){
	echo "{success:true}";
	}
	else "{success:false}";

?>