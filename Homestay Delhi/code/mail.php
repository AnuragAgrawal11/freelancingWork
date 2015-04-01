<?php
	$recipient = $_GET['recipient'];
	$name = $_GET['name'];
	$email = $_GET['email'];
	$comment = $_GET['comment'];
	$subject = $_GET['subject'];	
	$notes = stripcslashes($notes);	
	$message = " Message: $comment \r \n From: $name  \r \n Reply to: $email";
	mail($recipient, $subject, $message);
?>
success