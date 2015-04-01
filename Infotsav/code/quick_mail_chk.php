<?php


$to = "rockingsanjay90@gmail.com" ;
$subject = "Infotsav 2010 Quick Contact Form";
$name = "Sanjay" ;
$email= "rockingsanjay90@yahoo.com";
$msg = "Hello how are you" ;



$message="Name :$name  \n E-Mail : $email \n 
Message :$msg" ;
$headers = "From: $email";

$sent = mail($to, $subject, $message, $headers) ; 

if($sent)
{
	echo 'Sent' ;
}
else
{
	echo 'Error' ;
}



?> 