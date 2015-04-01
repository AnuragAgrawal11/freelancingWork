<?php 
$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost
$db_user = "root"; // change to your database user
$db_password = ""; // change to your database password
$database = "homestay"; // provide your database name


# STOP HERE
####################################################################
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE
$db = mysql_connect($hostname, $db_user, $db_password);
mysql_select_db($database,$db);
?>