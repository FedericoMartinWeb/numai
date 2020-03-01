<?php 
$para = 'fedemartinpalacios@gmail.com, mariadiazdg@gmail.com';
$asunto = 'Mensaje desde numai.com.ar';
$mailheader = "From: ".$_POST['email']."\r\n";
$mailheader .= "Reply-To: ".$_POST['email']."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST['name']."\n";
$MESSAGE_BODY .= "\n<br> Subject: ".$_POST['subject']."\n";
$MESSAGE_BODY .= "\n<br> Email: ".$_POST['email']."\n";
$MESSAGE_BODY .= "\n<br> Mensaje: ".nl2br($_POST['mensaje'])."\n";
mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("An error has occurred. please try again!");
header('Location: http://numai.com.ar/dryrun/#');
?>