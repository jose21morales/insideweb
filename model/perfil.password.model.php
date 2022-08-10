<?php

class Update_perfil_password {
	private $errors;

	public function __construct() {
		$this->errors = [];
	}

	public function getUpdatePerfilPassword() {
		require_once("conexion.php");
        $conexion = Conectar::conexion();


		$count = 0;

	if (isset($_POST['btn-password']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

		$id = $_POST['id'];
		$password_actual = htmlentities(addslashes($_POST['password_actual']), ENT_QUOTES);
	    $password = htmlentities(addslashes($_POST['password']), ENT_QUOTES);
		$password2 = htmlentities(addslashes($_POST['password2']), ENT_QUOTES);

		$pass_cifrado = password_hash($password, PASSWORD_DEFAULT, ['cost'=>15]);

		if (empty($password_actual)) {
			$this->errors['password_actual'] = 'Escribe tu contraseña actual';
		} else {

		    $sql = "SELECT password FROM users WHERE id = :id";
		    $statements = $conexion->prepare($sql);
		    $statements->bindValue(":id", $id);
		    $statements->execute();

		    if ($row = $statements->fetch(PDO::FETCH_ASSOC)) {
			    if (password_verify($password_actual, $row['password'])) {
			    	$count++;
			    }
		    }
		    
			if ($count == 0) {
				$this->errors['password_actual-error'] = 'La contraseña es incorrecta';
			}
		}

		if (empty($password)) {
			$this->errors['password'] = 'Escribe tu contraseña';
		}
		if (empty($password2)) {
			$this->errors['password2'] = 'Confirma tu contraseña';
		}
		if (strlen($password) > 0 && strlen($password) < 8) {
			$this->errors['password_characters'] = 'Tu contraseña debe tener un minimo de 8 caracteres';
		} elseif ($password != $password2) {
			$this->errors['password_confirm'] = 'Las contraseñas no coinciden';
		}

		if (empty($this->errors)) {
			$sql = "UPDATE users SET password = :password WHERE id = :id";
			$resultado = $conexion->prepare($sql);
			$resultado->bindValue(":password", $pass_cifrado);
			$resultado->bindValue(":id", $id);
			$resultado->execute();

			header('Refresh:3;URL=../index.php');
			$this->errors['msg'] = "¡Tu contraseña ha sido cambiada con éxito!";
		}
	}

		return $this->errors;
	}
}