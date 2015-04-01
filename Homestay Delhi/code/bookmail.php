<?php
$to = $_REQUEST['owner'];
$subject = "Book My Homestay";
$name = $_REQUEST['name'] ;
$email = $_REQUEST['mail'] ;
$contact_num = $_REQUEST['contact_num'] ;
$persons = $_REQUEST['num_persons'] ;
$arrival_month = $_REQUEST['arrival_date_month'] ;
$arrival_day = $_REQUEST['arrival_date_day'] ;
$arrival_year = $_REQUEST['arrival_date_year'] ;
$departure_month = $_REQUEST['departure_date_month'] ;
$departure_day = $_REQUEST['departure_date_day'] ;
$departure_year = $_REQUEST['departure_date_year'] ;
$message_to_owner = $_REQUEST['message_to_owner'] ;


$message="Name :$name \n E-mail :$email\n Contact Number :$contact_num \n  Number Of Persons :$persons \n Arrival Day : $arrival_day \t Month : $arrival_month \t Year :$arrival_year \n Departure Date : $departure_day \t Month :$departure_month \t Year :$departure_year \n
Message to Owner :$message_to_owner" ;
$headers = "From: $email";

$sent = mail($to, $subject, $message, $headers) ;
if($sent)
{print "Your mail was sent successfully"; }
else
{print "We encountered an error sending your mail"; }

?> 