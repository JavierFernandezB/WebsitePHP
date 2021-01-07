<?php 
function mostrarerrores($errores,$campo)
{
	$alerta = '';
	if (isset($errores[$campo]) && !empty($campo)) {
		$alerta = "<small class='form-text text-muted bg-danger'>". $errores[$campo]. "</small>";
	}

	return $alerta;
}


function borrarErrores()
{
	$_SESSION['compleado'] = null;
	$_SESSION['general'] = null;
	$_SESSION['errores'] = null;
	$borrado = session_unset();
	return $borrado;
}
 ?>