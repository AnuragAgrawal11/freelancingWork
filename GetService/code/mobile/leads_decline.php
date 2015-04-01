<?php
include 'connect.php';
//$accepted_time = date('d-m-Y H:i:s');
//echo $accepted_time;
$query1 = "UPDATE provider_leads SET accepted_time= current_timestamp(),status='2' WHERE lead_id='".$_GET['lead_id']."' AND provider_id='".$_GET['provider_id']."'";
$exe1=mysql_query($query1);
//echo $exe1;

	//echo 'updated';
	if($exe1 ==1){
	echo "{success:true}";
	}
	else 
	echo "{success:false}";

?>