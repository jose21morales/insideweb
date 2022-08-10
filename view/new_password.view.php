<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva contraseña | Online-Web</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/new_password.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>

	<div class="new__pass-header">
		<img class="new__pass-header-img" src="../img/favicon.png">
		<h3 class="new__pass-header-title"><b>Inside</b>WEB</h3>
	</div>

	<?php

		if (!empty($errors['token'])) {
			echo "<p class='error' style='text-align:center;font-size:22px;'>" . $errors['token'] . "</p>";
		}

		if (!empty($errors['token_not_exist'])) {
			echo "<p class='error' style='text-align:center;font-size:22px;'>" . $errors['token_not_exist'] . "</p>";
		}

	?>

	<form class="form-new__password" action="" method="POST">
		<label for="password">Escribe tu nueva contraseña:</label><br>
		<input type="password" name="password" placeholder="Escribe tu contraseña..."><br>
		
		<?php

		if (!empty($errors['password'])) {
			echo "<p class='error'>" . $errors['password'] . "</p>";
		}

		?>

		<label for="password2">Confirma tu contraseña:</label><br>
		<input type="password" name="password2" placeholder="Confirma tu contraseña..."><br>

		<?php

		if (!empty($errors['password2'])) {
			echo "<p class='error'>" . $errors['password2'] . "</p>";
		}

		if (!empty($errors['password_characters'])) {
			echo "<p class='error'>" . $errors['password_characters'] . "</p>";
		}

		if (!empty($errors['password_confirm'])) {
			echo "<p class='error'>" . $errors['password_confirm'] . "</p>";
		}

		?>

		<input type="submit" name="btn-password" value="Cambiar contraseña">
	</form>

</body>
</html>
