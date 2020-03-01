
<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
$to = "no-reply@c1710711.ferozo.com";
$subject = "Mensaje desde numai.com.ar";
$contenido .= "Nombre: ".$_POST["name"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Comentario: ".$_POST["mensaje"]."\n\n";
$header = "From: no-reply@c1710711.ferozo.com\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
    header('Location: http://numai.com.ar/dryrun/#');
}

}
?>