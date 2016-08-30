<?php
//this comment added on branch2
$to = 'mrsvette@localhost.com'; // replace with your address here
$subject = 'Test mail';
$message = 'Hello! This is a simple test email message.';
$from = 'root@localhost.com';
$headers = 'From:' . $from;
mail($to,$subject,$message,$headers);
echo 'Mail Sent.';
?>