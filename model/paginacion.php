<?php

require_once("conexion.php");
$conexion = Conectar::conexion();

		$post_por_pagina = 4;

		if (isset($_GET['pagina'])) {
			
			if ($_GET['pagina'] == 1) {
				header('Location: index.php?action=blog');
			} else {
				$pagina = $_GET['pagina'];
			}
		} else {
			$pagina = 1;
		}

		$empesar_desde = ($pagina - 1) * $post_por_pagina;

		$consulta = "SELECT * FROM blog";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array());
		$num_filas = $resultado->rowCount();
		$total_paginas = ceil($num_filas / $post_por_pagina);

		$resultado->closeCursor();

		$consulta = "SELECT * FROM blog LIMIT $empesar_desde, $post_por_pagina";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array());

		$filas = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>