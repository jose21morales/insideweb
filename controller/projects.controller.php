<?php

require 'model/portafolio.model.php';

$user_portafolio = new Portafolio();
$errors = $user_portafolio->setComment();
$user = $user_portafolio->getUser();
$opiniones_array = $user_portafolio->getComment();

require 'model/navegacion.user.model.php';
require 'view/navegacion.php';
require 'view/portafolio.view.php';
require 'view/footer.php';

?>