<?php
if(isset($_POST['nombres']) || isset($_POST['correo']) || isset($_POST['mensaje'])){

    $nombre=$_POST['nombres'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje']; 
    $email_to = "merlypayanov@gmail.com";
    $email_subject = "Contacto desde el sitio web";
    $email_message = "Correo registrado:\n";
    $email_message .= "Nombres: " . $nombre . "\n";
    $email_message .= "E-mail: " . $correo . "\n";
    $email_message .= "Mensaje: " . $mensaje . "\n";
    
    mail($email_to, $email_subject, $email_message);
    header('Location:contactenos.php');
    
}
?>
