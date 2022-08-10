<!--

Start Date:
November 13th, Wednesday, 2019

End Date:
February 18th, Friday, 2022

-->

<?php
# Cunter Views - Save IP Address

require_once("model/conexion.php");
$conexion = Conectar::conexion();

date_default_timezone_set('America/Mexico_City');

$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_GET['action'])) {
	if ($_GET['action'] == 'home' || $_GET['action'] == 'contact' || $_GET['action'] == 'projects' || $_GET['action'] == 'blog' || $_GET['action'] == 'about') {

		$tabs = $_GET['action'];
	} else {
		header('Location: view/404.php');
	}
} else {
	$tabs = 'home';
}

$sql = "SELECT * FROM views WHERE ip = :ip ORDER BY id DESC";
$statements = $conexion->prepare($sql);
$statements->bindValue(":ip",$ip);
$statements->execute();

$row_counter = $statements->rowCount();

if ($row_counter == 0) {
	if ($tabs == 'home' || $tabs == 'contact' || $tabs == 'projects' || $tabs == 'blog' || $tabs == 'about') {
		$sql = "INSERT INTO views (ip, date_view, ip_view, $tabs) VALUES ('$ip',now(), '$ip',1)";
		$statements = $conexion->prepare($sql);
		$statements->execute();
	}
} else {

	$row = $statements->fetch(PDO::FETCH_ASSOC);

	$registerDate = $row['date_view'];
	$currentDate = date('Y-m-d H:i:s');
	$newDate = strtotime($registerDate . '+ 30 minutes');
	$newDate = date('Y-m-d H:i:s',$newDate);

	if ($currentDate >= $newDate) {
		if ($tabs == 'home' || $tabs == 'contact' || $tabs == 'projects' || $tabs == 'blog' || $tabs == 'about') {
			$sql = "INSERT INTO views (ip, date_view) VALUES ('$ip',now())";
			$statements = $conexion->prepare($sql);
			$statements->execute();

			$sql = "UPDATE views SET $tabs = $tabs + 1 WHERE ip_view = '$ip'";
			$statements = $conexion->prepare($sql);
			$statements->execute();
		}
	} else {
		$sql = "UPDATE views SET $tabs = $tabs + 1 WHERE ip_view = '$ip'";
		$statements = $conexion->prepare($sql);
		$statements->execute();
	}
}

# End of counter views and save IP Address

require 'model/function.model.php';

$pagina = new Funciones;
$pagina->enlacesPaginas();

?>