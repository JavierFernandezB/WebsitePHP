<?php

require_once './includes/conexion.php';
$errores = array();
if (isset($_POST['submit'])) {

	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
	$password = isset($_POST['password']) ? $_POST['password'] : false;
	$password2 = isset($_POST['password']) ? $_POST['password2'] : false;

	if (!is_numeric($nombre) && !empty($nombre)) {
		$nombre_bien = true;
	} else {
		$errores['nombre'] = "nombre incorrecto";
	}

	if (!empty($password)) {
		$password_bien = true;
	} else if (strlen($password) < 8) {
		$errores['password'] = "password muy corta";
	} else {
		$errores['password'] = "password invalida";
	}

	if ($password != $password2) {
		$errores['password2'] = "la contrase&ntilde; no coinciden";
	}

	if (count($errores) == 0) {
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
		$sql = "INSERT INTO users VALUES(null,'$nombre','$password_segura',false);";
		$guardar = mysqli_query($db, $sql);
		if ($guardar) {
			$_SESSION['completado'] = "El registro se a completado";
		} else {
			$errores['general'] = "fallo al guardar user";
		}

		header('Location: index.php');
	} else {
		$_SESSION['errores'] = $errores;
		//header("Location: index.php");
		header('Location: index.php');
	}
}
