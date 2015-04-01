<?php
 //error_reporting(E_STRICT);
 
$to = "contact@infotsav.org" ;
$subject = "Infotsav 2010 Contact";
$fname = $_REQUEST['name'] ;
$lname = $_REQUEST['name'] ;
$email= $_REQUEST['email'] ;
$phone= $_REQUEST['telephone'] ;
$company= $_REQUEST['company'];
$subject= $_REQUEST['subject'];								
$msg = $_REQUEST['message'] ;
$message="Name :$fname '".$lname."'  \n E-Mail : $email \n Phone :$phone \n Institute :$company \n
Message :$msg" ;
$headers = "From: $email";

$sent = mail($to, $subject, $message, $headers) ; 
 


if($sent)
{
		
  		header("Location:contact.php");

} else 
{
	echo 'error' ;
}



?> 