<?php

class NewPassword {
	private $errors;

	public function __construct() {
		$this->errors = [];
	}

	public function getNewPassword() {
		require_once("../model/conexion.php");
		$conexion = Conectar::conexion();

        if (isset($_GET['mail']) && isset($_GET['token'])) {

	        $mail = htmlspecialchars(addslashes($_GET['mail']));
	        $token = htmlspecialchars(addslashes($_GET['token']));

	        $sql = "SELECT token FROM users WHERE mail = :mail";
	        $statements = $conexion->prepare($sql);
	        $statements->bindValue(":mail", $mail);

	        $statements->execute();

	        $row = $statements->fetch(PDO::FETCH_ASSOC);

	        if (empty($mail) || empty($token)) {
		        header('Location: forget_password.controller.php');
	        }

	        if ($row['token'] == $token) {

                if (isset($_POST['btn-password']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

	                $password = htmlspecialchars(addslashes($_POST['password']));
	                $password2 = htmlspecialchars(addslashes($_POST['password2']));
	                $pass_cifrado = password_hash($password, PASSWORD_DEFAULT, ['cost'=>15]);

	                if (empty($password)) {
		                $this->errors['password'] = 'Por favor escribe una contraseña';
	                }

	                if (empty($password2)) {
		               $this->errors['password2'] = 'Por favor confirma tu contraseña';
	                }
	                
	                if (strlen($password) > 0 && strlen($password) < 8) {
		                $this->errors['password_characters'] = 'La contraseña debe tener un minimo de 8 caracteres';
	                
	                } elseif ($password != $password2) {
		                $this->errors['password_confirm'] = 'Las contraseñas no coinciden';
	                }

	                if (empty($this->errors)) {
		
		                $sql = "UPDATE users SET PASSWORD = :password, TOKEN = '' WHERE MAIL = :mail";
		                $statements = $conexion->prepare($sql);
		                $statements->bindValue(":password", $pass_cifrado);
		                $statements->bindValue(":mail", $mail);
		                $statements->execute();

		                header('Refresh:2;URL=../');
		                echo "<p class='msg'>¡Tu contraseña se ha cambiado con éxito!</p>";
	                }
                }

            } else {
	            header('Refresh:6;URL=forget_password.controller.php');
	            $this->errors['token'] = 'Error en el token, por favor ingresa nuevamente tu correo para reenviarte el link';
            }
        } else {
        	header('Refresh:3;URL=forget_password.controller.php');
	            $this->errors['token_not_exist'] = 'Error. Por favor introdusca su correo.';
        }

        return $this->errors;
    }
}

?>