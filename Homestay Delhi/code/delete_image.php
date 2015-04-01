<?php
//echo "hello yaar ";
session_start();
$imgname=$_GET['name'];
unlink("uploaded/".$_SESSION['user']."/".$imgname);
include "connect.php";
$sql="delete from images where img='".$imgname."' && user_name='".$_SESSION['user']."'";
$rs=mysql_query($sql);
header("Location:gallery.php");
?>