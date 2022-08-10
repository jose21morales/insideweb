<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta charset="utf-8">
	<title>Registro | InsideWEB</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
</head>
<body class="body-registro">
	<div class="body-opacity">

<!--
	 <div class="contenedor-div">
	    <img class="logo-white" src="../img/online-logo.png">
		<span class="icon-bars" id="btnMenu"></span>
		<div class="nav" id="nav">
		 <ul class="menu">
			 <li class="menu__item"><a class="menu__link" href="index.php?action=acerca"><span class="icon-user"></span> ACERCA DE..</a></li>
			 <li class="menu__item"><a class="menu__link" href="index.php?action=blog"><span class="icon-social-blogger"></span> BLOG</a></li>
 			 <li class="menu__item"><a class="menu__link" href="index.php?action=portafolio"><span class="icon-folder-open"></span> PORTAFOLIO</a></li>
			 <li class="menu__item"><a class="menu__link" href="index.php?action=contacto"><span class="icon-phone"></span> CONTACTO</a></li>
			 <li class="menu__item"><a class="menu__link" href="index.php"><span class="icon-home"></span> INICIO</a></li>
		 </ul>
		</div>
	 </div>
-->
		<div class="container">

			<?php

			if (!empty($errors['msg'])) {
				echo "<p class='message'>" . $errors['msg'] . "</p>";
			}

			?>

			<form class="form-registro" action="" method="POST">
				<h3 class="form-registro-title">Registro</h3>
				<label for="name">Nombre: *</label>
				<input type="text" name="name" id="name" placeholder="Escribe tu nombre..." value="">

				<?php

				if (!empty($errors['name'])) {
					echo "<p class='error'>" . $errors['name'] . "</p>";
				}

				?>
				
				<label for="sex">Sexo: *</label>
				<select class="form-registro-select" name="sex" id="sex">
					<option></option>
					<option>H</option>
					<option>M</option>
				</select>
				<?php

				if (!empty($errors['sex'])) {
					echo "<p class='error'>" . $errors['sex'] . "</p>";
				}

				?>

				<label for="user">Usuario: Ej. Alex233 *</label>
				<input type="text" name="user" id="user" placeholder="Escribe tu usuario..." value="">

				<?php

				if (!empty($errors['user'])) {
					echo "<p class='error'>" . $errors['user'] . "</p>";
				}

				if (!empty($errors['user_exist'])) {
					echo "<p class='error'>" . $errors['user_exist'] . "</p>";
				}

				?>

				<label for="mail">Correo: *</label>
				<input type="text" name="mail" id="mail" placeholder="Escribe tu correo..." value="">

				<?php

				if (!empty($errors['mail'])) {
					echo "<p class='error'>" . $errors['mail'] . "</p>";
				}

				if (!empty($errors['mail_exist'])) {
					echo "<p class='error'>" . $errors['mail_exist'] . "</p>";
				}

				?>

				<label for="password">Contraseña: *</label>
				<input type="password" name="password" id="password" placeholder="Escribe tu contraseña...">

				<?php

				if (!empty($errors['password'])) {
					echo "<p class='error'>" . $errors['password'] . "</p>";
				}

				?>

				<label for="password2">Confirmar contraseña: *</label>
				<input type="password" name="password2" id="password2" placeholder="Confirma tu contraseña...">

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

				<table>

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><p class="register-p">Al hacer clic aceptas las <a target="_blank" href="../view/privacy_policy.php">politicas de privacidad</a></p></td>
					<td></td>
				</tr>

<!-- 				<tr>
					<td><input type="checkbox" class="checkbox" name="send_ads"></td>
					<td></td>
					<td></td>
					<td></td>					
					<td colspan="4"><p class="register-p">Acepta recibir ofertas, noticias, descuentos</p></td>
				</tr>
 -->
			    </table>

				<input type="submit" name="btn-registro" value="Registrarse">
				<p class="register-p">¿Ya tienes una cuenta? <a href="login.controller.php">Haz clic aqui</a></p>
			</form>
		</div>
</div>

</body>
</html>