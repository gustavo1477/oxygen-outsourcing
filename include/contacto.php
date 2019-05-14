<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $empresa = $_POST['empresa'];
    $telefono = $_POST['telefono'];
    $provincia = $_POST['provincia'];
    $direccion = $_POST['direccion'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un nombre <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br />';
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br />';
    }
    
    if (!empty($empresa)) {
		$empresa = trim($nombre);
		$empresa = filter_var($empresa, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa el nombre de la empresa <br />';
    }
    
    if (!empty($telefono)) {
		$telefono = trim($telefono);
		$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_FLOAT);
	} else {
		$errores .= 'Por favor ingresa un nombre <br />';
    }
    
    if (!empty($provincia)) {
		$provincia = trim($provincia);
		$provincia = filter_var($provincia, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa el nombre de la empresa <br />';
    }

    if (!empty($direccion)) {
		$direccion = trim($direccion);
		$direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa el nombre de la empresa <br />';
    }

	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa el mensaje <br />';
	}

	if(!$errores){
		$enviar_a = 'gerencia@oxygenoutsourcing.net';
		$asunto = 'Correo enviado desde Oxygen Outsourcing';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		//mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}
?>