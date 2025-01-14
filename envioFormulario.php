<?php
session_start();

$secretKey = "6Ld0MpUpAAAAAMq-LkIZLEmxDmgOgqI7ga2rECi1";
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

// Verificar la respuesta de reCAPTCHA
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
$response = file_get_contents($url);
$response = json_decode($response);

if ($response->success) {
    // La verificación de reCAPTCHA fue exitosa, procesa el formulario
    // Aquí colocarías tu lógica para manejar los datos del formulario, como guardarlos en una base de datos o enviar un correo electrónico
} else {
    // El reCAPTCHA falló, maneja el error aquí
    $_SESSION['message'] = 'Captcha inválido. Por favor intenta de nuevo.';
    $_SESSION['message_type'] = 'error';
    header('Location: contacto.php'); // Redirecciona al usuario a una página de error o formulario
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegurarse de que los campos nombre, correo, asunto y mensaje no están vacíos
    if(empty($_POST['NAME']) || empty($_POST['EMAIL']) || empty($_POST['SUBJECT']) || empty($_POST['MESSAGE'])) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Asignar valores a variables
    $nombre = $_POST['NAME'];
    $correo = $_POST['EMAIL'];
    $telefono = $_POST['PHONE'];
    $tema = $_POST['SUBJECT'];
    $contenidoMensaje = $_POST['MESSAGE']; // Renombrado para evitar la sobreescritura de la variable $mensaje

    // Validar que el correo contiene "@"
    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, introduce una dirección de correo válida.";
        exit;
    }

    // Preparar el mensaje
    $mensaje = "Nombre: " . $nombre . "\n";
    $mensaje .= "Correo: " . $correo . "\n";
    $mensaje .= "Telefono: " . $telefono . "\n";
    $mensaje .= "Tema: " . $tema . "\n";
    $mensaje .= "Mensaje: " . $contenidoMensaje . "\n"; // Usar la variable $contenidoMensaje

    // Enviar el correo
    if(mail('vindalooestudios@gmail.com', 'Nuevo mensaje del formulario', $mensaje)) {
        $_SESSION['message'] = "MENSAJE ENVIADO";
        $_SESSION['message_type'] = "success";
        header("Location: contacto.php"); // Asegúrate de que esto es un archivo .php para procesar la sesión
        exit;
    } else {
        $_SESSION['message'] = "ERROR DE ENVIO";
        $_SESSION['message_type'] = "error";
        header("Location: contacto.php");
        exit;
    }
}
?>
