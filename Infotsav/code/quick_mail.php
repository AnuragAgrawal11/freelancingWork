<?php


$to = "contact@infotsav.org" ;
$subject = "Infotsav 2010 Quick Contact Form";
$name = $_REQUEST['name'] ;
$email= $_REQUEST['email'] ;
$msg = $_REQUEST['message'] ;
$page= $_REQUEST['page'] ;


$message="Name :$name  \n E-Mail : $email \n 
Message :$msg" ;
$headers = "From: $email";

$sent = mail($to, $subject, $message, $headers) ; 

if($sent) 
{
	
	header("Location:".$page."?thanq=1");

} else 
{
	header("Location:".$page."?thanq=1");
}



?> 