<?php
include "connect.php" ;
session_start() ;

if(!(isset($_SESSION['uid'])))
{
	echo 'Access Denied :P Login First to see the details...' ; 
}
else
{
$qry = "select *  from users where external_ip!='10.10.10.2' and institute not like 'ABV%' and institute not like 'Atal%' and institute not like '%IIITM%' ";
$rs =mysql_query($qry);
$arr = mysql_fetch_array($rs) ;
while($arr = mysql_fetch_array($rs))
{
echo $arr['email'] ;
echo '<br/>';
}
}

?>