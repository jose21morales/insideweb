<?php

class Login {
	private $errors;

	public function __construct() {
		$this->errors = [];
	}

	public function getLogin() {
		require_once("conexion.php");
        $conexion = Conectar::conexion();

		if (isset($_POST['btn-login'])) {
			$login = htmlentities(addslashes($_POST['user']), ENT_QUOTES);
			$password = htmlentities(addslashes($_POST['password']), ENT_QUOTES);
			$counter = 0;

			if (empty($login) || empty($password)) {
				$this->errors['empty_login'] = 'Rellene todos los campos';
			} else {
				$sql = "SELECT user, mail, password, verify_mail FROM users WHERE user = :login OR mail = :login";
				$statements = $conexion->prepare($sql);
				$statements->bindValue(":login",$login);
				$statements->execute();

				if ($row_login = $statements->fetch(PDO::FETCH_ASSOC)) {
					if (password_verify($password, $row_login['password'])) {
					    $counter++;
					}
				}

				if ($counter == 1) {
					if ($row_login['verify_mail'] == 0) {
						header('Location: confirm_mail.controller.php');
					} else {
					    session_start();
					    $_SESSION['user'] = $login;
					    header('Location: ../index.php');
					}
				}

				if ($counter == 0) {
					$this->errors['error_login'] = 'Error. Usuario o contraseña incorrectos';
				}
			}
		} else {
			$login = '';
		}

		return $this->errors;
	}
}

?>