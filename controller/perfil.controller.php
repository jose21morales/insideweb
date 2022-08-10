<?php
session_start();

if (!$_SESSION['user']) {
	header('Location: ../index.php');
}

require("../model/perfil.model.php");

$perfil = new Update_perfil();
$errors = $perfil->getUpdatePerfil();

require("../model/navegacion.user.model.php");
require("../view/navegacion_perfil.php");
require("../view/perfil.view.php");
require("../view/footer_form_paquetes.php");

?>