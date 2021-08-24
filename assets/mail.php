<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['textarea']))
$message = $_POST['textarea'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "heathmartinvo@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email Sent ! Thank you for reaching out to me, I will get back to you as soon as possible !" . " -" . "<a href='../index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>