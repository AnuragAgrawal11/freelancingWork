<?php
include 'connect.php';

$query = mysql_query("SELECT * FROM appointments Where user_id ='".$_GET["user_id"]."' AND id ='".$_GET["rem_id"]."'");

$num_rows = mysql_num_rows($query);

//$row = mysql_fetch_array($query);
//echo "$num_rows Rows\n".$num_rows;
//echo $row[user_id];

$return_arr = array();
//$c = 0;
while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
	
	
	 
	
	//echo $time1.'<br>';
	// echo $date1.'<br>';
	$appointment_date = substr($row['date'], 0,10);
	$appointment_time = substr($row['date'], 10);
	$reminder_date = substr($row['reminder'], 0,10);
	$reminder_time = substr($row['reminder'], 10);
	//echo $time1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$date1.'<br>';
	$appointment_date1 = date("D M j Y" , strtotime($appointment_date));
	$appointment_time1 = date("g:i a", strtotime($appointment_time));
	$reminder_date1 = date("D M j Y" , strtotime($reminder_date));
	$reminder_time1 = date("g:i a", strtotime($reminder_time));
	
	
	
	//echo $row['0'];
	$row_array['rem_id'] = $row['id'];
	$row_array['user_id'] = $row['user_id'];
	$row_array['appointment'] = $row['appointment'];
	$row_array['aap_date'] = $row['date'];
	
	$row_array['rem_date'] = $row['reminder'];
	
	$row_array['description'] = $row['description'];

	array_push($return_arr,$row_array);
}


echo json_encode($return_arr);
	
	
	
	
?>