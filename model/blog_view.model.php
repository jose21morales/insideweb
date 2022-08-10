<?php

class Blog_view {

	public function devuelve_blog_view($dato) {
	    require_once 'conexion.php';
        $conexion = Conectar::conexion();

		$sql = "SELECT * FROM blog WHERE id = '$dato'";
	    $statements = $conexion->prepare($sql);
		$statements->execute();

		$row = $statements->fetchAll(PDO::FETCH_ASSOC);
		$statements->closeCursor();

		return $row;

		$conexion = null;
	}
}

?>