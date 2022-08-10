<?php

class DeleteComment {

	public function DelComment() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();

		$sql = "DELETE FROM commenters WHERE id = :id";
		$statements = $conexion->prepare($sql);
		$statements->bindValue(':id', $_GET['user_id']);
		$statements->execute();

		header('Location: ../view/blog-view.php?id=' . $_GET['id'] . '#comentarios');
	}
}

$deleteComment = new DeleteComment();
$deleteComment->DelComment();

?>