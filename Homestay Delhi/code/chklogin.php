<?php
include "connect.php";

$query="SELECT * FROM personal WHERE user_name='".$_REQUEST['username']."' && password='".$_REQUEST['password']."'";
$exe=mysql_query($query);
$no=mysql_num_rows($exe);
$row=mysql_fetch_array($exe);
//echo $query;
if($no==1)
{
	session_start();
	$_SESSION['login']=1;
	$_SESSION['user']=$_REQUEST['username'];
	$_SESSION['level']=$row['user_level'];
	
	header("Location:index.php");
}
else
{
	header("Location:index.php?log=1");
}


?>
