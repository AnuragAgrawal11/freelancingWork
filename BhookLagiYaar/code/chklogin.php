<?php
include "connect.php";


ini_set( "display_errors", 0);
if($_REQUEST['username']=='admin' && $_REQUEST['password']=='bhooklagiyaar')

{
//echo $query;

	$boo=session_start();
	$_SESSION['login']=1;
	$_SESSION['user']=$_REQUEST['username'];
	$uid = $row[id];
	
	if($boo==1)
	 $_SESSION['istrue']=1;
	 else
	 	$_SESSION['istrue']=0;
	if($_SESSION['istrue']==1)
			  
			   header("Location:admin.php?uid=$uid");
			   
		
}
else
{
	
	header("Location:index.php?log=1");
}


?>