<?php

require("../model/login.model.php");

$login = new Login();
$errors = $login->getLogin();

require '../view/login.view.php';

?>