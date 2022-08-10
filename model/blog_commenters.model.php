<?php

class Commenters {
	private $errors;
	private $users;
	private $commenters;

	public function __construct() {
		$this->errors = [];
		$this->users = [];
		$this->commenters = [];
	}

	public function getCommenter() {
		require_once("../model/conexion.php");
        $conexion = Conectar::conexion();

		date_default_timezone_set('America/Mexico_City');

		if (isset($_POST['btn-comment']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
			$avatar = $_POST['avatar'];
			$name = $_POST['name'];
			$last_name = $_POST['last_name'];
			$age = $_POST['age'];
			$sex = $_POST['sex'];
			$direction = $_POST['direction'];
			$phone = $_POST['phone'];
			$user = $_POST['user'];
			$mail = $_POST['mail'];
			$date = date('y-m-d H-i-s');
			$login = $_POST['login'];			
			$blog_id = $_POST['blog_id'];

			$commenter = htmlspecialchars(stripslashes($_POST['commenter']));

			session_start();
			if ($_SESSION['user']) {

				if (empty($commenter)) {
					$this->errors['commenter_empty'] = 'Por favor escriba un comentario';
				} else {

				    $sql = "INSERT INTO commenters (avatar, name, last_name, age, sex, direction, phone, user, mail, commenter_date, commenter, blog_id) VALUES (:avatar, :name, :last_name, :age, :sex, :direction, :phone, :user, :mail, :commenter_date, :commenter, :blog_id)";
				    $statements = $conexion->prepare($sql);
				    $statements->bindValue(":avatar", $avatar);
				    $statements->bindValue(":name", $name);
				    $statements->bindValue(":last_name", $last_name);
				    $statements->bindValue(":age", $age);
				    $statements->bindValue(":sex", $sex);
				    $statements->bindValue(":direction", $direction);
				    $statements->bindValue(":phone", $phone);
				    $statements->bindValue(":user", $user);
				    $statements->bindValue(":mail", $mail);
				    $statements->bindValue(":commenter_date", $date);
				    $statements->bindValue(":commenter", $commenter);
				    $statements->bindValue(":blog_id", $blog_id);
				    $statements->execute();

				    #header('Location: ../view/blog-view.php?id=' . $blog_id . '#comentarios');
				}
			} else {
				$this->errors['not_session'] = 'Inicie sesión para poder comentar';
			}
		}
		return $this->errors;
	}

	public function setCommenter($id) {
		require_once("../model/conexion.php");
        $conexion = Conectar::conexion();

		$statements = $conexion->query("SELECT * FROM commenters WHERE blog_id = '$id' ORDER BY id DESC");
		while($row = $statements->fetch(PDO::FETCH_ASSOC)) {
			$this->commenters[] = $row;
		}
		return $this->commenters;
	}

	public function getUser($mail) {
		require_once("../model/conexion.php");
        $conexion = Conectar::conexion();

		$sql = "SELECT * FROM users WHERE user = :mail OR mail = :mail";
		$statements = $conexion->prepare($sql);
		$statements->bindValue(":mail", $mail);
		$statements->execute();

		while ($row = $statements->fetch(PDO::FETCH_ASSOC)) {
			$this->users[] = $row;
		}
		return $this->users;
	}
}

?>