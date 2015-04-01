<?php
include 'connect.php';
$pass = md5($_GET['password']);
$query = "SELECT * FROM users Where username ='".$_GET['username']."'&& password ='".$pass."'";

$exe=mysql_query($query);
$no=mysql_num_rows($exe);
$row=mysql_fetch_array($exe);
//echo $no;
//echo $row['username'];

if($no != 0)
{
$query6 = "SELECT * FROM provider_location Where user_id ='".$row['id']."'";

$exe6=mysql_query($query6);
$no6=mysql_num_rows($exe6);
$row6=mysql_fetch_array($exe6);



//echo $no6;
if($no6 == 0)
{	
//echo $row['id'].'<br>';
$query1 = "insert into provider_location (user_id,latitude,longitude) values ('".mysql_real_escape_string(stripslashes($row['id']))."', '".mysql_real_escape_string(stripslashes($_GET['latitude']))."' , '".mysql_real_escape_string(stripslashes($_GET['longitude']))."') " ;	
$result = mysql_query($query1);
}
else{
mysql_query("UPDATE provider_location SET latitude = '".mysql_real_escape_string(stripslashes($_GET['latitude']))."', longitude = '".mysql_real_escape_string(stripslashes($_GET['longitude']))."'  WHERE user_id='".mysql_real_escape_string(stripslashes($row['id']))."'");
	}
$query8 = "SELECT * FROM device_registration Where provider_id ='".$row['id']."' LIMIT 1";

$exe8=mysql_query($query8);
$no8=mysql_num_rows($exe8);
if($no8==1)
{
	//do nothing
}
else{ // insert deviceToken
$query7 = "insert into device_registration (provider_id,device_token) values ('".$row['id']."', '".mysql_real_escape_string(stripslashes($_GET['device_token']))."') " ;	
$exe7=mysql_query($query7);
}
$query2 = "SELECT * FROM settings Where user_id ='".$row['id']."' LIMIT 1";

$exe2=mysql_query($query2);
$no2=mysql_num_rows($exe2);
$row2=mysql_fetch_array($exe2);
//echo $no2;
if($no2 == 0)
{
	$query3 = "insert into settings (user_id,lead_notification,tune,appointment_alarms,battery_saver_mode,volume) values ('".mysql_real_escape_string(stripslashes($row['id']))."', '".mysql_real_escape_string('1')."' , '".mysql_real_escape_string('POP')."', '".mysql_real_escape_string('1')."','".mysql_real_escape_string('0')."', '".mysql_real_escape_string('8')."') " ;	
$result = mysql_query($query3);
	//echo $query3;
	$query4 = "SELECT * FROM settings Where user_id ='".$row['id']."' LIMIT 1";

	$exe4=mysql_query($query4);
	$no4=mysql_num_rows($exe4);
	$row4=mysql_fetch_array($exe4);
	
	$return_arr1 = array();
	
	$row_array['user_id'] = $row4['user_id'];
	$row_array['lead_notification'] = $row4['lead_notification'];
	$row_array['tune'] = $row4['tune'];
	$row_array['appointment_alarms'] = $row4['appointment_alarms'];
	$row_array['battery_saver_mode'] = $row4['battery_saver_mode'];
	$row_array['volume'] = $row4['volume'];
	//echo $row_array[0];
	array_push($return_arr1,$row_array);
	echo json_encode($return_arr1);
	}
	
	else
	{
		$query5 = "SELECT * FROM settings WHERE user_id ='".$row['id']."' LIMIT 1";
	//echo $query5;
	$exe5=mysql_query($query5);
	$no5=mysql_num_rows($exe5);
	//echo $no5;
	$row5=mysql_fetch_array($exe5);
	
	$return_arr1 = array();
	
	$row_array['user_id'] = $row5['user_id'];
	//echo $row_array['user_id'];
	$row_array['lead_notification'] = $row5['lead_notification'];
	$row_array['tune'] = $row5['tune'];
	$row_array['appointment_alarms'] = $row5['appointment_alarms'];
	$row_array['battery_saver_mode'] = $row5['battery_saver_mode'];
	$row_array['volume'] = $row5['volume'];
	
	array_push($return_arr1,$row_array);
	echo json_encode($return_arr1);
	}


}
	
else{
echo "{success:false}";
}
?>