<?php

class Blog {
	private $blog;
	private $errors;

	public function __construct() {
		$this->blog = [];
		$this->errors = [];
	}

	public function devuelve_blog() {
        require_once 'conexion.php';
        $conexion = Conectar::conexion();
		
		require("model/paginacion.php");

		$resultado=$conexion->query("SELECT * FROM blog ORDER BY ID DESC LIMIT $empesar_desde, $post_por_pagina");
		$registros = $resultado->fetchAll(PDO::FETCH_ASSOC);
			
		return $registros;
	}

	public function search_engine() {
		require_once("conexion.php");
		$conexion = Conectar::conexion();

		if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-search_engine'])) {

		$searchEngine = htmlentities(addslashes($_POST['search_engine']), ENT_QUOTES);

			if (empty($searchEngine)) {
				$this->errors['empty'] = 'Por favor introdusca el articulo a buscar.';

				return $this->errors;
			} else {
				$sql = "SELECT * FROM blog WHERE titulo LIKE '%$searchEngine%'";
				$statements = $conexion->prepare($sql);
				$statements->execute();

				$row_count = $statements->rowCount();

				if ($row_count == 0) {
					$this->errors['article_not_exist'] = 'El articulo que buscas no existe :/';
					return $this->errors;
				} else {
					while ($row = $statements->fetch(PDO::FETCH_ASSOC)) {
						$this->blog[] = $row;
					}
					return $this->blog;
				}
			}
		}
	}
}

?>