<?php 

include 'connect.php';

$query = "insert into leads (contact_name,contact_phone,keyword,location,ip_location,counter,status) values ('".mysql_real_escape_string(stripslashes($_GET['name']))."', '".mysql_real_escape_string(stripslashes($_GET['phone']))."' ,'".mysql_real_escape_string(stripslashes($_GET['keyword']))."' , '".mysql_real_escape_string(stripslashes($_GET['city']))."' , '".mysql_real_escape_string(stripslashes($_GET['ip']))."' , '".mysql_real_escape_string(stripslashes('0'))."', '".mysql_real_escape_string(stripslashes('1'))."') " ;	

$result = mysql_query($query);

$query1 = "SELECT * FROM leads Where contact_phone ='".$_GET['phone']."'&& ip_location ='".$_GET['ip']."' ORDER BY id ASC LIMIT 1";

$exe=mysql_query($query1);
$no=mysql_num_rows($exe);
$row=mysql_fetch_array($exe);

//header("Content-type: application/json");
//echo $_GET['arr'];
//echo $_GET['arr'];
//$obj = json_decode($_GET['arr']);
//echo 2;
//print_r ($obj);
if(get_magic_quotes_gpc()){
  $d = stripslashes($_GET['arr']);
}else{
  $d = $_GET['arr'];
}
$d = json_decode($d,true);
//print_r($d);

//print_r($d[0][name]);

$size = sizeof($d);

for($i=0; $i<$size; $i++)
{
$query2 = "insert into provider_leads (lead_id,provider_id,contact_name,contact_no,accepted_time,status) values ('".mysql_real_escape_string(stripslashes($row['id']))."', '".mysql_real_escape_string(stripslashes($d[$i][id]))."' ,'".mysql_real_escape_string(stripslashes($d[$i][name]))."' , '".mysql_real_escape_string(stripslashes($d[$i][phone]))."' ,'".mysql_real_escape_string('')."' , '".mysql_real_escape_string('0')."') " ;	
$result1= mysql_query($query2);


}
   	if($result==1)
	echo "{success:true}";
	else
	echo "{success:false}";
?>