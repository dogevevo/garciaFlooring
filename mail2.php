<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    //$subject = $_POST['subject'];
    $number = $_POST['phone'];
    $message = $_POST['message'];

    // Dirección de correo a la que se enviará el formulario
    $to = 'rstevenpr@gmail.com';

    // Asunto del correo
    $email_subject = 'Nuevo mensaje desde pagina web';

    // Construir el cuerpo del mensaje
    $email_body = "Has recibido un nuevo mensaje.\n\n" .
        "Nombre: $name\n" .
        "Email: $email\n" .
        //"Asunto: $subject\n" .
        "Teléfono: $number\n" .
        "Mensaje:\n$message";

    // Encabezados del correo
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Enviar el correo
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "¡Tu mensaje ha sido enviado!";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
} else {
    echo "Ha ocurrido un error al procesar el formulario.";
}
?>
