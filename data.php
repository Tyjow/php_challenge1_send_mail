<?php

$to = $_POST['mail']; // le champs de l'e-mail à entrer
$subject = $_POST['obj']; // le sujet de l'e-mail
$message = $_POST['msg']; // la zone de texte du message
$headers = 'From: platon.jonathan@codeacademie.com' . "\r\n" . // De : (de qui viens l'e-mail)
     'Reply-To: platon.jonathan@codeacademie.com' . "\r\n" . // Répondre à : (à qui répondre en général le meme que le "From"
     'X-Mailer: PHP/' . phpversion();
$file = $_POST['file'];

mail($to, $subject, $message, $headers, $file);

?>