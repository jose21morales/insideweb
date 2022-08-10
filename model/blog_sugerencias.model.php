<?php

class Blog_sugerencias {
	private $blog;

	public function __construct() {
		$this->blog = [];
	}

	public function getBlog_sugerencias($id) {
		require_once("conexion.php");
		$conexion = Conectar::conexion();

		$id = ($id == 1) ? ($id + 3) : ($id - 1);
		$id = ($id >= 5) ? ($id = 4) : ($id = $id);
		$desde = ($_GET['id'] == 1) ? ($id - 3) : ($_GET['id'] - 5);
		$desde = ($desde < 0) ? 0: $desde;

		$sql = "SELECT id, titulo, imagen, extracto FROM blog LIMIT $desde, $id";
		$statements = $conexion->prepare($sql);
		$statements->execute();

		while($row = $statements->fetch(PDO::FETCH_ASSOC)) {
			$this->blog[] = $row;
		}
		return $this->blog;
	}
}

?>