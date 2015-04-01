<?php
//echo "hello yaar ";
session_start();

include "connect.php";
$sql="delete from scrap where img='".$name."' && user='".$_SESSION['user']."'";
$rs=mysql_query($sql);
header("Location:scrapbook.php?owner=$name");
?>