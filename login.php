<?php
require_once './includes/conexion.php';

if (isset($_POST)) {
	$name = trim($_POST['name']);
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE name = '$name'";
	$loging = mysqli_query($db, $query);

	if ($loging && mysqli_num_rows($loging) == 1) {
		$usuario = mysqli_fetch_assoc($loging);
		$verify = password_verify($password, $usuario['password']);
		var_dump($usuario);
		if ($verify) {
			$_SESSION['usuario'] = $usuario;
			if (isset($_SESSION['error_Login'])) {
				session_unset($_SESSION['error_Login']);
			}
		} else {
			$_SESSION['error_Login'] = "login incorrecto";
		}
	} else {

		$_SESSION['error_Login'] = "login incorrecto";
	}
}

header("Location: index.php");
