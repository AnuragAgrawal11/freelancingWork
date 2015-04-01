<?php
include 'connect.php';

$query = "SELECT * FROM users Where username ='".$_GET['username']."'&& password ='".$_GET['password']."'";

$exe=mysql_query($query);
$no=mysql_num_rows($exe);
$row=mysql_fetch_array($exe);
//echo $no;
//echo $row['username'];

if($no != 0)

{	

$query1 = "insert into provider_location (user_id,latitude,longitude) values ('".mysql_real_escape_string(stripslashes($row['id']))."', '".mysql_real_escape_string(stripslashes($_GET['latitude']))."' , '".mysql_real_escape_string(stripslashes($_GET['longitude']))."') " ;	
$result = mysql_query($query1);

echo "{success:true}";
}
	
else{
echo "{success:false}";
}
?>