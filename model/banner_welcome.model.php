<?php

class BannerWelcome {
	private $user;

	public function __construct() {
		$this->user = [];
	}

	public function getBannerWelcome() {
		require_once("model/conexion.php");
		$conexion = Conectar::conexion();

		session_start();

		if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];

		    $sql = "SELECT * FROM users WHERE user = :user OR mail = :user";
		    $statements = $conexion->prepare($sql);
		    $statements->bindValue(":user", $user);
		    $statements->execute();

		    while ($row = $statements->fetch(PDO::FETCH_ASSOC)) {
			    $this->user[] = $row;
		    }
		}

		return $this->user;
	}
}

?>