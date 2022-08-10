<?php
require("config.php");

class Conectar {
	private $conexion;

	public static function conexion() {

		try {
			$conexion = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec(DB_CHARACTERS);

			return $conexion;

		} catch (Exception $e) {
			die("Error: " . $e->getMessage());
		}
	}
}

?>