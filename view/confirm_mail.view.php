<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmar correo | Online-Web</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/confirm_mail.css">
</head>
<body>

	<h3 class="form-confirm-title">Escribe el código que te enviamos a tu correo para confirmarlo</h3>

	<?php

	if (!empty($msg['code_correct'])) {
		echo "<p class='msg'>" . $msg['code_correct'] . "</p>";
	}

	?>

	<form class="form-confirm" action="" method="POST">
		<label for="code">Código:</label>
		<input type="text" name="code" id="code" placeholder="Escribe el código...">

	    <?php

	    if (!empty($msg['code_error'])) {
		    echo "<p class='error'>" . $msg['code_error'] . "</p>";
	    }

	    if (!empty($msg['code_empty'])) {
		    echo "<p class='error'>" . $msg['code_empty'] . "</p>";
	    }

	    ?>

		<input type="submit" name="btn-confirm" value="Confirmar">
	</form>

</body>
</html>