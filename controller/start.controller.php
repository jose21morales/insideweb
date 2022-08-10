<?php

require 'model/enviar_proyectos.model.php';
require 'model/registro.model.php';
require 'model/login.model.php';
require 'model/project.model.php';
require 'model/banner_welcome.model.php';

$user = new BannerWelcome();
$registro = new Registro();
$login = new Login();

$user = $user->getBannerWelcome();
$errors = $registro->insertRegistro();
$errors_login = $login->getLogin();

if (!empty($errors['msg'])) {
    echo "<p class='message'>" . $errors['msg'] . "</p>";
}

require 'model/navegacion.user.model.php';
require 'view/navegacion.php';
require 'view/start.view.php';
require 'view/footer.php';

?>