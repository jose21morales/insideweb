<?php

class DeleteComment {

	public function DelComment() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();

		$sql = "DELETE FROM opiniones WHERE id = :id";
		$statements = $conexion->prepare($sql);
		$statements->bindValue(':id', $_GET['id']);
		$statements->execute();

		header('Location: ../index.php?action=projects#clientes-opiniones');
	}
}

$deleteComment = new DeleteComment();
$deleteComment->DelComment();

?>