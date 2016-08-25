<?php

$to = $_POST['mail'];
$subject = $_POST['obj'];
$message = $_POST['msg'];
$headers = 'From: platon.jonathan@codeacademie.com' . "\r\n" .
     'Reply-To: platon.jonathan@codeacademie.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>