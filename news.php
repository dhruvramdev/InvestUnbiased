<?php

$visitor_email = $_POST['email'];

$email_from = 'sddtu01@gmail.com';
$email_subject = "Newsletter";
$email_body = " $visitor_email"
$to = "nikhilyadav3000@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>
