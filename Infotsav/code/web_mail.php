<?php

 
$to = "contact@infotsav.org" ;
$subject = "Infotsav Web Feedback";
$name = $_REQUEST['name'] ;

$email= $_REQUEST['email'] ;

$telephone = $_REQUEST['telephone'] ;
$company= $_REQUEST['company'] ;

$subject= $_REQUEST['subject'] ;


$msg = $_REQUEST['message'] ;


$message=" Name :$name  \n

E-mail :$email  \n

Telephone :$telephone  \n
Company :$company  \n


Message :$msg" ;
$headers = "From: $email";

$sent = mail($to, $subject, $message, $headers) ;

header("Location:webteam.php");


?> 