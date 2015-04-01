<?php
$db = mysql_connect("localhost", "infotsav10", "infotsav10.0");
if(!mysql_select_db("infotsav10",$db))
{
  echo "Error not connected";
}
?>