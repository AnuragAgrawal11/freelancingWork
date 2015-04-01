<?php
include 'connect.php';

$query = mysql_query("SELECT * FROM provider_leads LEFT JOIN leads ON provider_leads.lead_id = leads.id Where provider_leads.provider_id ='".$_GET["user_id"]."' && provider_leads.status='0' ORDER BY provider_leads.id DESC");

$num_rows = mysql_num_rows($query);
//$row = mysql_fetch_array($query);
//echo "$num_rows Rows\n".$num_rows;
//echo $row[user_id];

$return_arr = array();
//$c = 0;
while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
	
	$time1 = substr($row['lead_time'], 10);
	$date1 = substr($row['lead_time'], 0,10);
	//echo $time1.'<br>';
	// echo $date1.'<br>';
	
	//echo $row['0'];
	$row_array['lead_id'] = $row['lead_id'];
	$row_array['provider_id'] = $row['provider_id'];
	$row_array['lead_time'] = $row['lead_time'];
	$row_array['time'] = $time1;
	$row_array['date'] = $date1;
	$row_array['user_contact_name'] = $row['contact_name'];
	$row_array['contact_phone'] = $row['contact_phone'];
	$row_array['keyword'] = $row['keyword'];
	$row_array['location'] = $row['location'];
	
	$query2 = mysql_query("SELECT * FROM provider_leads  Where lead_id ='".$row['lead_id']."'");

	$num_rows2 = mysql_num_rows($query2);
//echo $num_rows2;
	if($num_rows2 == 1)
	{	//$row_array['personal'] = row
	$row_array['personal'] = 'Yes';
	
	}
	else{
		$row_array['personal'] = 'No';
		}
	array_push($return_arr,$row_array);
}


	echo json_encode($return_arr);
	
	
	
	
?>