<?php

class EditComment {
	private $errors;
	private $comment;
	private $msg;

	public function __construct() {
		$this->errors = [];
		$this->comment = [];
		$this->msg = [];
	}

	public function commentShow($id) {
		require_once '../model/conexion.php';
		$conexion = Conectar::conexion();

		$sql = "SELECT id, avatar, sex, user, commenter FROM opiniones WHERE id = :id";
		$statements = $conexion->prepare($sql);
		$statements->bindValue(':id',$id);
		$statements->execute();

		while ($row = $statements->fetch(PDO::FETCH_ASSOC)) {
			$this->comment[] = $row;
		}

		return $this->comment;
	}

	public function commentEdited() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();
		
		if (isset($_POST['btn-editComment']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
			$id = $_POST['id'];
			$comment = htmlentities(addslashes($_POST['comment']), ENT_QUOTES);

			if (empty($comment)) {
				$this->errors['comment'] = 'Por favor introduzca un comentario';
			} else {
				$sql = "UPDATE opiniones SET commenter = :comment WHERE id = :id";
				$statements = $conexion->prepare($sql);
				$statements->bindValue(":comment", $comment);
				$statements->bindValue(":id", $id);
				$statements->execute();

				header('Location: ../index.php?action=projects#clientes-opiniones');
			}
		}

		return $this->errors;
	}

}

?>
