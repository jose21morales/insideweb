<?php

require("../model/new_password.model.php");

$new_password = new NewPassword();
$errors = $new_password->getNewPassword();

require("../view/new_password.view.php");

?>