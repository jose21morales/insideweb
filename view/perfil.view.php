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
			<a href=""><button class="btn_edit">Editar perfil</button></a>
			
			<a href="perfil.password.controller.php?id=<?php echo $_GET['id']; ?>&avatar=<?php echo $_GET['avatar']; ?>&name=<?php echo $_GET['name']; ?>&last_name=<?php echo $_GET['last_name']; ?>&age=<?php echo $_GET['age']; ?>&sex=<?php echo $_GET['sex']; ?>&direction=<?php echo $_GET['direction']; ?>&phone=<?php echo $_GET['phone']; ?>&user=<?php echo $_GET['user']; ?>&mail=<?php echo $_GET['mail']; ?>"><button class="btn_pass">Cambiar contraseña</button></a>
		</div>

	<form class="form__alumno" action="" method="POST" enctype="multipart/form-data">
		<h2 class="form__alumno-title">Editar perfil</h2>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

		<div class="upload__image-perfil">

			<div class="upload__image-perfil-img">

			<?php if($_GET['avatar'] != ''){ ?>
			    <img id="perfil-image" class="upload__image-perfil-image" src="../img/<?php echo $_GET['avatar']; ?>" title="Ver foto">
			<?php } elseif ($_GET['avatar'] == '' && $_GET['sex'] == 'h') { ?>
			    <img id="perfil-image" class="upload__image-perfil-image" src="../img/avatar-m.jpg" title="Ver foto">
		    <?php } elseif ($_GET['avatar'] == '' && $_GET['sex'] == 'm') { ?>

		        <img id="perfil-image" class="upload__image-perfil-image" src="../img/avatar-w.png" title="Ver foto">

		        <?php } ?>

			   <label for="image_perfil">
			    <span class="icon-camera" title="Sube una foto de perfil"></span>
			   </label>

			</div>
		
		    <!-- Modal del perfil -->

		    <div class="modal__perfil" id="modal-perfil">
		    	<a class="modal__perfil-close" href="">X</a>
		    	<div class="modal__perfil-content" id="modal-perfil-content">

		    		<?php if(!empty($_GET['avatar'])) { ?>
		    		
		    		<h2 class="modal__perfil-content-title"><?php echo ucwords($_GET['name']); ?></h2>

		    		<img class="modal__perfil-content-img" src="../img/<?php echo $_GET['avatar']; ?>">
		    	    
		    	    <?php } elseif ($_GET['avatar'] == '' && $_GET['sex'] == 'h') { ?>

		    		<h2 class="modal__perfil-content-title"><?php echo ucwords($_GET['name']); ?></h2>

		    	    <img class="modal__perfil-content-img" src="../img/avatar-m.jpg">

		    	    <?php } elseif ($_GET['avatar'] == '' && $_GET['sex'] == 'm') { ?>

		    		<h2 class="modal__perfil-content-title"><?php echo ucwords($_GET['name']); ?></h2>

		    	    <img class="modal__perfil-content-img" src="../img/avatar-w.png">

		    	    <?php } ?>
		    	</div>
		    </div>

		    <!-- Fin de modal -->

		  <div class="upload__image-info">
		    <p class="upload__image-info-name-p"><label class="upload__image-info-name"><?php echo ucwords($_GET['name']); ?></label></p>
		    
		    <label class="upload__image-info-change" for="image_perfil">Cambiar foto de perfil</label>
		  </div>
	      
	      <input id="image_perfil" type="file" name="image_perfil">
		</div><br>

		<?php

		if (!empty($errors['error_image_size'])) {
			echo "<p class='error'>" . $errors['error_image_size'] . "</p>";
		}

		if (!empty($errors['image_type'])) {
			echo "<p class='error'>" . $errors['error_image_type'] . "</p>";
		}

		?>
		
		<label for="name">Nombre (s): *</label><br>
		<input type="text" name="name" placeholder="Escribe tu nombre..." value="<?php echo $_GET['name']; ?>"><br>

		<?php

		if (!empty($errors['error_name'])) {
			echo "<p class='error'>" . $errors['error_name'] . "</p>";
		}

		?>

		<label for="sex">Sexo: *</label><br>

		<select name="sex">
			<option>
				<?php

				if ($_GET['sex'] == 'h') {
					echo "Hombre";
				} elseif ($_GET['sex'] == 'm') {
					echo "Mujer";
				}

				?>
			</option>
		</select>

		<?php

		if (!empty($errors['error_sex'])) {
			echo "<p class='error'>" . $errors['error_sex'] . "</p>";
		}

		?>

		<label for="user">Usuario: *</label><br>
		<input type="text" name="user" placeholder="Escribe tu usuario..." value="<?php echo $_GET['user']; ?>"><br>

		<?php

		if (!empty($errors['error_user'])) {
			echo "<p class='error'>" . $errors['error_user'] . "</p>";
		}

		?>

		<label for="mail">Correo: *</label><br>
		<input type="text" name="mail" placeholder="Escribe tu correo..." value="<?php echo $_GET['mail']; ?>"><br>

		<?php

		if (!empty($errors['error_mail'])) {
			echo "<p class='error'>" . $errors['error_mail'] . "</p>";
		}

		if (!empty($errors['error_mail_validate'])) {
			echo "<p class='error'>" . $errors['error_mail_validate'] . "</p>";
		}

		if (!empty($errors['mail_exist'])) {
			echo "<p class='error'>" . $errors['mail_exist'] . "</p>";
		}

		?>

		<input type="submit" name="btn-update" value="Actualizar datos">
	</form>
    </div>
	</div>
