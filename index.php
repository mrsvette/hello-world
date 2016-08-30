<?php
//this comment added on branch2, with also edit once again
//this comment added on branch3
//this comment added on branch4
$to = 'mrsvette@localhost.com'; // replace with your address here
$subject = 'Test mail';
$message = 'Hello! This is a simple test email message.';
$from = 'root@localhost.com';
$headers = 'From:' . $from;
mail($to,$subject,$message,$headers);
echo 'Mail Sent.';
?>