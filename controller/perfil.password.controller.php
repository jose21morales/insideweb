<?php
session_start();

if (!$_SESSION['user']) {
	header('Location: ../index.php');
}

require("../model/perfil.password.model.php");

$perfil_password = new Update_perfil_password();
$errors = $perfil_password->getUpdatePerfilPassword();

require("../model/navegacion.user.model.php");
require("../view/navegacion_perfil.password.php");
require("../view/perfil.password.view.php");
require("../view/footer_form_paquetes.php");

?>