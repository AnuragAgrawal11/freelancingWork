<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("homestay", $con);

$sql="INSERT INTO scrap VALUES ('".$_POST['scrap_post']."')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?> 