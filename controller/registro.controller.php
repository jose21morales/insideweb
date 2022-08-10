<?php
require("../model/registro.model.php");

$registro = new Registro();
$errors = $registro->insertRegistro();

require("../view/registro.view.php");

?>