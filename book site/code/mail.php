<?php
$to = 'rockingsanjay90@gmail.com' ;
$subject = "Book My Homestay";
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;


$message="Name :$name \n E-mail :$email\n 
Message :$message " ;
$headers = "From: $email";

$sent = mail($to, $subject, $message, $headers) ;

header("Location: ".$_GET['url']." ");
?> 