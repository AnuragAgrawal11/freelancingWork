<?php
include 'connect.php';
//$accepted_time = date('d-m-Y H:i:s');
//echo $accepted_time;
$query1 = "UPDATE provider_leads SET accepted_time= current_timestamp(),status='1' WHERE lead_id='".$_GET['lead_id']."' AND provider_id='".$_GET['provider_id']."'";
$exe1=mysql_query($query1);
//echo $exe1;

	//echo 'updated';
	if($exe1 ==1){
	$query2 = "SELECT * FROM leads WHERE id ='".$_GET['lead_id']."' LIMIT 1";
	
	$exe2=mysql_query($query2);
	$no2=mysql_num_rows($exe2);
	
	$row2=mysql_fetch_array($exe2);
	
	$return_arr1 = array();
	
	$row_array['lead_id'] = $row2['id'];
	//echo $row_array['user_id'];
	$row_array['requestor_name'] = $row2['contact_name'];
	$row_array['requestor_phone'] = $row2['contact_phone'];
	$row_array['requestor_email'] = $row2['user_email'];
	
	array_push($return_arr1,$row_array);
	echo json_encode($return_arr1);
	}
	else "{success:false}";

?>