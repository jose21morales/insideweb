<?php

class Update_perfil {
	private $errors;

	public function __construct() {
		$this->errors = [];
	}

	public function getUpdatePerfil() {
		require_once("conexion.php");
        $conexion = Conectar::conexion();

		if (isset($_POST['btn-update']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
			$id=$_POST['id'];
			$image_perfil_name = $_FILES['image_perfil']['name'];
			$image_perfil_type = $_FILES['image_perfil']['type'];
			$image_perfil_size = $_FILES['image_perfil']['size'];

			$name = htmlentities(addslashes($_POST['name']), ENT_QUOTES);
			$sex = strtolower($_POST['sex']);
			$user = htmlentities(addslashes($_POST['user']), ENT_QUOTES);
			$mail = htmlentities(addslashes($_POST['mail']), ENT_QUOTES);

			$user_table_comment = htmlentities(addslashes($_GET['user']), ENT_QUOTES);

			if ($image_perfil_size <= 1000000) {
				if ($image_perfil_type == 'image/jpg' || $image_perfil_type == 'image/jpeg' || $image_perfil_type == 'image/png' || $image_perfil_type == 'image/gif' || $image_perfil_type == '') {

					$folder_fate = $_SERVER['DOCUMENT_ROOT'] . '/insideweb/img/';

					move_uploaded_file($_FILES['image_perfil']['tmp_name'], $folder_fate . $image_perfil_name);
				} else {
					$this->errors['error_image_type'] = 'El archivo elegido no es una imagen';
				}
			} else {
				$this->errors['error_image_size'] = 'El tamaño de la imagen excede 1 MB';
			}

			if (empty($name)) {
				$this->errors['error_name'] = 'Por favor escribe tu nombre';
			}
			if (empty($sex)) {
				$this->errors['error_sex'] = 'Por favor selecciona tu sexo';
			}
			if (empty($user)) {
				$this->errors['error_user'] = 'Por favor escribe tu usuario';
			}
			if (empty($mail)) {
				$this->errors['error_mail'] = 'Por favor escribe tu correo';
			} else {
				/*
				$sql = "SELECT * FROM users WHERE mail = :mail";
				$statements = $this->conexion->prepare($sql);
				$statements->bindValue(":mail", $mail);
				$statements->execute();
				$row_count = $statements->rowCount();

				if ($row_count != 0) {
					$this->errors['mail_exist'] = 'El correo ya éxiste en nuestra base de datos';
				}
				*/
			}

			if (empty($this->errors)) {

		        $sql = "UPDATE users SET AVATAR = :avatar, NAME = :name, SEX = :sex, USER = :user, MAIL = :mail WHERE ID = :id";
		        $statements = $conexion->prepare($sql);
		        $statements->bindValue(":id", $id);
		        $statements->bindValue(":avatar", $image_perfil_name);
		        $statements->bindValue(":name", $name);
		        $statements->bindValue(":sex", $sex);
		        $statements->bindValue(":user", $user);
		        $statements->bindValue(":mail", $mail);
		        $statements->execute();

		        $sql = "UPDATE commenters SET avatar = :avatar, name = :name, sex = :sex, user = :user, mail = :mail WHERE user = :user_table_comment";
		        $statements = $conexion->prepare($sql);
		        $statements->bindValue(":user_table_comment", $user_table_comment);
		        $statements->bindValue(":avatar", $image_perfil_name);
		        $statements->bindValue(":name", $name);
		        $statements->bindValue(":sex", $sex);
		        $statements->bindValue(":user", $user);
		        $statements->bindValue(":mail", $mail);
		        $statements->execute();

		        $sql = "UPDATE opiniones SET avatar = :avatar, name = :name, sex = :sex, user = :user, mail = :mail WHERE user = :user_table_comment";
		        $statements = $conexion->prepare($sql);
		        $statements->bindValue(":user_table_comment", $user_table_comment);
		        $statements->bindValue(":avatar", $image_perfil_name);
		        $statements->bindValue(":name", $name);
		        $statements->bindValue(":sex", $sex);
		        $statements->bindValue(":user", $user);
		        $statements->bindValue(":mail", $mail);
		        $statements->execute();

		        header('Refresh:2;URL=../index.php');
		        $this->errors['msg'] = "¡Tus datos se actualizaron con éxito!";
			}

		}

		return $this->errors;
	}
}
?>