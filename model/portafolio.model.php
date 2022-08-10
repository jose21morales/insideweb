<?php

class Portafolio {
	private $user;
	private $errors;
	private $opiniones;

	public function __construct() {
		$this->user = [];
		$this->errors = [];
		$this->opiniones = [];
	}

	public function getUser() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();

		session_start();

		if (isset($_SESSION['user'])) {
		$session = $_SESSION['user'];

			$sql = "SELECT * FROM users WHERE user = :user OR mail = :user";
			$statements = $conexion->prepare($sql);
			$statements->bindValue(":user", $session);
			$statements->execute();

			while($row_user = $statements->fetch(PDO::FETCH_ASSOC)) {
				   $this->user[] = $row_user;
			}
		}
		

		return $this->user;
	}

	public function getComment() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();

		$sql = "SELECT * FROM opiniones";
		$statements = $conexion->prepare($sql);
		$statements->execute();

		while($row_array = $statements->fetch(PDO::FETCH_ASSOC)) {
		    $this->opiniones[] = $row_array;
		}

		return $this->opiniones;
	}

	public function setComment() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();
		date_default_timezone_set("America/Mexico_City");

		if (isset($_POST['btn-comment']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
			$avatar = htmlspecialchars(addslashes($_POST['avatar']));
			$name = htmlspecialchars(addslashes($_POST['name']));
			$last_name = htmlspecialchars(addslashes($_POST['last_name']));
			$age = htmlspecialchars(addslashes($_POST['age']));
			$sex = htmlspecialchars(addslashes($_POST['sex']));
			$direction = htmlspecialchars(addslashes($_POST['direction']));
			$phone = htmlspecialchars(addslashes($_POST['phone']));
			$user = htmlspecialchars(addslashes($_POST['user']));
			$mail = htmlspecialchars(addslashes($_POST['mail']));
			$commenter_date = date('y-m-d H:i:s');
			$commenter = htmlspecialchars(addslashes($_POST['commenter']));

			session_start();
			$_SESSION['user'];

			if ($_SESSION['user'] == true) {
				if (empty($commenter)) {
					$this->errors['empty_comment'] = 'Por favor escriba un comentario';
				} else {
			        $sql = "INSERT INTO opiniones (avatar, name, last_name, age, sex, direction, phone, user, mail, commenter_date, commenter) VALUES (:avatar, :name, :last_name, :age, :sex, :direction, :phone, :user, :mail, :commenter_date, :commenter)";
			        $statements = $conexion->prepare($sql);
			        $statements->bindValue(":avatar",$avatar);
			        $statements->bindValue(":name",$name);
			        $statements->bindValue(":last_name",$last_name);
			        $statements->bindValue(":age",$age);
			        $statements->bindValue(":sex",$sex);
			        $statements->bindValue(":direction",$direction);
			        $statements->bindValue(":phone",$phone);
			        $statements->bindValue(":user",$user);
			        $statements->bindValue(":mail",$mail);
			        $statements->bindValue(":commenter_date",$commenter_date);
			        $statements->bindValue(":commenter",$commenter);
			        $statements->execute();

			        header('Location: index.php?action=projects#clientes-opiniones');

				}
			} else {
				$this->errors['not_session'] = 'Inicia sesión para comentar';
			}
		}

		return $this->errors;
	}

	public function dataForm($data) {
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = htmlentities($data, ENT_QUOTES);
		$data = stripslashes($data);

		return $data;
	}
}

?>