<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['e-mail'];
	$telefono = $_POST['telefono'];
	$comentario = $_POST['comentario'];
	$opcion = $_POST['opcion'];
	if($opcion == 1){
		$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\n\nComentario: ".$comentario;
		echo $contenido;
		mail("dffernandodd@gmail.com","Opinion sitio web",$contenido);
		mail($correo,"Opinion sitio web",$contenido);
		header("Location:sended-e-mail-opinion.html");
	}
	else if($opcion == 2){
		$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\n\nComentario: ".$comentario;
		echo $contenido;
		mail("dffernandodd@gmail.com","Opinion sitio web",$contenido);
		mail($correo,"Opinion sitio web",$contenido);
		header("Location:sended-e-mail-join.html");
	}
?>
	