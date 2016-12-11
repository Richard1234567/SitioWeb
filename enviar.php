<?php
if(isset($_POST['charryto2@gmail.com'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "charryto2@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['apeliido']) ||
!isset($_POST['mail']) ||
!isset($_POST['telefono']) ||
!isset($_POST['direccion']) ||
!isset($_POST['localidad']) ||
!isset($_POST['provincia']) ||
!isset($_POST['cp']) ||
!isset($_POST['lugar']) ||
!isset($_POST['comen']) ||
!isset($_POST['msj"'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Apellido: " . $_POST['apeliido'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "Direccion: " . $_POST['direccion'] . "\n";
$email_message .= "Localidad: " . $_POST['localidad'] . "\n";
$email_message .= "Provincia: " . $_POST['provincia'] . "\n";
$email_message .= "Codigo Postal: " . $_POST['cp'] . "\n";
$email_message .= "Lugar: " . $_POST['lugar'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['msj'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From:Charryto2@gmail.com '."\r\n".
'Reply-To: Charryto2@gmail.com '."\r\n".
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>