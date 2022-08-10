<?php
require("../model/edit_comment.model.php");

$commentUpdated = new EditComment();
$commentUpdated_array = $commentUpdated->commentShow($_GET['user_id']);
$errors = $commentUpdated->commentEdited();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Editar comentario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/edit_comment.css">
</head>
<body>

	<form class="form_edit_comment" action="" method="POST">
		<?php foreach ($commentUpdated_array as $data): ?>
			<div class="img-center">

				<?php if(empty($data['avatar']) && $data['sex'] == 'h') { ?>
					<img src="../img/avatar-m.jpg" width="100">
				<?php } elseif(empty($data['avatar']) && $data['sex'] == 'm') { ?>
					<img src="../img/avatar-w.png" width="100">
				<?php } else { ?>
					<img src="../img/<?php echo $data['avatar']; ?>" width="100">

				<?php } ?>

				<p class="user"><?php echo $data['user']; ?></p>
			</div>

			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<textarea name="comment" placeholder="Escribe un comentario"><?php echo $data['commenter']; ?></textarea>

			<?php if (!empty($errors['comment'])): ?>

				<?php echo "<p class='error'>" . $errors['comment'] . "</p>"; ?>

			<?php endif; ?>

			<input type="submit" name="btn-editComment" value="Actualizar">

		<?php endforeach; ?>
	</form>

</body>
</html>