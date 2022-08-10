<?php

class DeleteComment {

	public function DelComment() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();

		$sql = "DELETE FROM answered_commenters WHERE id = :id";
		$statements = $conexion->prepare($sql);
		$statements->bindValue(':id', $_GET['user_id_two']);
		$statements->execute();

		header('Location: ../view/blog-view.php?id=' . $_GET['id'] . '&user_id=' . $_GET['user_id'] . '#' . $_GET['user_id']);
	}
}

$deleteComment = new DeleteComment();
$deleteComment->DelComment();

?>