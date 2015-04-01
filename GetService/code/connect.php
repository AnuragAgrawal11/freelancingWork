<?php 
$host="localhost"; // Host name 
$username="getservi_live"; // Mysql username 
$password="live"; // Mysql password 
$db_name="getservi_live"; // Database name 
 // Table name

mysql_connect($host, $username, $password)or die("cannot connect"); 
mysql_select_db($db_name)or die("cannot select DB");
?>