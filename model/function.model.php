<?php

class Funciones {

	public function enlacesPaginas() {

		if (isset($_GET['action'])) {

			$enlaces = $_GET['action'];
		} else {
			
			$enlaces = "index";
		}

		if ($enlaces == "contact" || $enlaces == "blog" || $enlaces == "about" || $enlaces == 'login' || $enlaces == 'projects') {

			$module = 'controller/' . $enlaces . '.controller.php';
		}

		else if ($enlaces == "index") {

			$module = "controller/start.controller.php";
		}

		 else {

			$module = 	"controller/start.controller.php";
		}
		include $module;
	}

	public function formularioRegistro() {

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
		

		$errores .= '';

		if (!empty($nombre)) {
			$nombre = trim($nombre);
			$nombre = stripslashes($nombre);
			$nombre = strtolower($nombre);
			$nombre = htmlspecialchars($nombre);
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		} else {

				$errores .= 'Por favor ingresa el nombre de Usuario.';
		}

		if(!empty($correo)){
			$correo = trim($correo);
			$correo = htmlspecialchars($correo);
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			if (filter_var($correo, FILTER_SANITIZE_EMAIL)) {
				$correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
			} else {
				$errores .= 'Por favor ingresa un correo valido.';
			}
		} else {
			$errores = 'Por favor ingresa un correo.';
		}

		if (!empty($password)) {
			$password = hash('sha512', $password);
			$password2 = hash('sha512', $password2);
			
			if ($password != $password2) {
				$errores .= 'Las contraseñas no coinciden.';
			}
		} else {
			$errores .= 'Por favor ingresa la contraseña.';
		}

		if (!$errores) {
			header('Location: views/login.php');
		}

		}
		return $errores;
	}
}

?>