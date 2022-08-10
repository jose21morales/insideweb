<?php

require("../model/forget.password.model.php");

$forget_password = new ForgetPassword();
$errors = $forget_password->getForgetPassword();

require("../view/forget.password.view.php");

?>