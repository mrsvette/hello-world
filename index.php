<?php
//this comment added on branch2, with also edit once again
<<<<<<< HEAD
//this comment added on branch3
=======
>>>>>>> 2ca42b4e19a8f451d1af41ed8fe91449d1ba3dd8
$to = 'mrsvette@localhost.com'; // replace with your address here
$subject = 'Test mail';
$message = 'Hello! This is a simple test email message.';
$from = 'root@localhost.com';
$headers = 'From:' . $from;
mail($to,$subject,$message,$headers);
echo 'Mail Sent.';
?>