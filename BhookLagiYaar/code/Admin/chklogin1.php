<?php
include "connect.php";


ini_set( "display_errors", 0);



$query="SELECT * FROM customer WHERE Username='".$_REQUEST['username']."' && password='".$_REQUEST['password']."'";

$exe=mysql_query($query);
$no=mysql_num_rows($exe);
$row=mysql_fetch_array($exe);
//echo $query;
if($no>=1)
{
	$boo=session_start();
	$_SESSION['login']=1;
	$_SESSION['user']=$_REQUEST['username'];
	$uid = $row['customer_id'];
	$_SESSION['user_id'] = $uid;
	if($boo==1)
	 $_SESSION['istrue']=1;
	 else
	 	$_SESSION['istrue']=0;
	if($_SESSION['istrue']==1)
			  
			   header("Location:register.php?login=1&name='".$_SESSION['user']."'");
			   
		
}
else
{
	
	header("Location:register.php?login=2");
}


?>