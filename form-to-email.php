<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'cathyhou2002@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from $name.\n".
    "Here is the message:\n $message".
    
$to = "cathyhou2002@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: index.html');

?> 