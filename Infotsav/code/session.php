<?php 
session_start() ;

$style = $_GET['color1'];

$_SESSION['color1'] = $style;
//$page1 = $_GET['page'];
$ref=@$HTTP_REFERER; 
header("Location:$ref");


?>