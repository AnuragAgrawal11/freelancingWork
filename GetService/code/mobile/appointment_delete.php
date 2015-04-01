<?php
include 'connect.php';
//echo $_GET['rem_id'];
$exe = mysql_query("DELETE FROM appointments WHERE id='".$_GET['rem_id']."'");
	//echo $exe;
	if($exe==1){
	echo "{success:true}";
	}
	else 
	echo "{success:false}";

?>