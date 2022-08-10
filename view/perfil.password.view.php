<div class="banner-navegacion">
	<img class="banner-img-navegacion" src="img/cabeza.png">
	<div class="contenedor-navegacion">
              <div class="container-acerca">
		<h2 class="banner-titulo-navegacion">Contactanos...</h2>
		<p class="banner-txt-navegacion">+52 1 962 334 03 80</p>
              </div>
	</div>
</div>

<!-- Contenido -->

	<div class="container">

		<?php

		if(!empty($errors['msg'])) {
			echo "<p class='msg'>" . $errors['msg'] . "</p>";
		}

		?>

	<div class="edit_perfil-flex">
		<div class="edit_perfil-buttons">
			<a href="perfil.controller.php?id=<?php echo $_GET['id']; ?>&avatar=<?php echo $_GET['avatar']; ?>&name=<?php echo $_GET['name']; ?>&last_name=<?php echo $_GET['last_name']; ?>&age=<?php echo $_GET['age']; ?>&sex=<?php echo $_GET['sex']; ?>&direction=<?php echo $_GET['direction']; ?>&phone=<?php echo $_GET['phone']; ?>&user=<?php echo $_GET['user']; ?>&mail=<?php echo $_GET['mail']; ?>"><button class="btn_edit">Editar perfil</button></a>

			<a href=""><button class="btn_pass">Cambiar contraseña</button></a>
		</div>

	<form class="form__alumno" action="" method="POST">
		<h2 class="form__alumno-title">Cambio de contraseña</h2>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

		<label for="password">Contraseña actual:</label><br>
		<input type="password" name="password_actual" placeholder="Escribe tu contraseña actual..."><br>

		<?php

		if (!empty($errors['password_actual'])) {
			echo "<p class='error'>" . $errors['password_actual'] . "</p>";
		}

		if (!empty($errors['password_actual-error'])) {
			echo "<p class='error'>" . $errors['password_actual-error'] . "</p>";
		}

		?>

		<label for="password">Nueva contraseña:</label><br>
		<input type="password" name="password" placeholder="Escribe una contraseña nueva..."><br>

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
    </div>
    </div>
    