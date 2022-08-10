<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>Login | InsideWEB</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/loginn.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
</head>
<body class="form-body">
	<div class="contenido-login">
		<div class="contenido-fondo">
	
		<h3 class="form-titulo-login">Login</h3>
	
	    <form class="form-login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			    
				<table>
					<tr>
						<td><span class="icon-user"></span></td>
						<td><input type="text" name="user" placeholder="Usuario / Correo" value=""></td>
					</tr>
			    	<tr>
			    		<td><span class="icon-lock"></span></td>
			    		<td><input type="password" name="password" placeholder="Contraseña"></td>
			    	</tr>

			    	<tr>
			    		<td colspan="2">
			    			
					    <?php if (!empty($errors['empty_login'])): ?>
							<?php echo '<p class="error-login">' . $errors['empty_login'] . "</p>"; ?>
		 				<?php endif; ?>

					    <?php if (!empty($errors['error_login'])): ?>
							<?php echo '<p class="error-login">' . $errors['error_login'] . "</p>"; ?>
		 				<?php endif; ?>

			    		</td>
			    	</tr>

			    	<tr>
			    		<td colspan="2"><input type="submit" name="btn-login" value="Iniciar"></td>
			    	</tr>
			    	<tr>
			    		<td colspan="2"><p class="login-p"><a href="forget_password.controller.php">¿Has olvidado tu contraseña?</a></p></td>
			    	</tr>
			 </table>

			    <p class="login-p">¿No tienes cuenta? <a href="registro.controller.php">Haz clic aqui</a></p>
		    </form>
		</div>
	</div>
</body>
</html>
