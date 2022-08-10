<?php

require("../model/navegacion.user.model.php");
require_once("navegacion_blog_view.php");

?>

<div class="banner-navegacion">
	<img class="banner-img-navegacion" src="img/cabeza.png">
	<div class="contenedor-navegacion">
            <div class="container-blog__view">
		<h2 class="banner-titulo-navegacion">Contactanos...</h2>
		<p class="banner-txt-navegacion">+52 1 962 334 03 80</p>
            </div>
	</div>
</div>

<?php

require("../model/blog.model.php");

$post = new Blog();
$blog_array = $post->search_engine();
$errors = $post->search_engine();

?>

<!-- Internet Search Engine -->

<div class="search_engine-container">
    <form class="search_engine-form" action="" method="POST">
        <input type="text" name="search_engine" placeholder="Buscar" value="">
        <button class="btn-button" type="submit" name="btn-search_engine"><span class="icon-search"></span></button>
    </form>
</div>

<?php if(isset($_POST['btn-search_engine'])): ?>

<div class="search_engine_post-container">
<h3 class="search_engine_post-result">Resultados de busqueda:</h3>

<?php

$count = (count($blog_array));

if ($count == 1) {
    echo "<i><p class='search_engine_post-result2'>Hay " . $count . " resultado</p></i>";
} else {
    echo "<i><p class='search_engine_post-result2'>Hay " . $count . " resultados</p></i>";
}

?>

<?php foreach ($blog_array as $blog): ?>

    <?php

    if (!empty($errors['empty'])) {
        echo "<p class='error_empty'>" . $errors['empty'] . "</p>";
    } elseif (!empty($errors['article_not_exist'])) {
        echo "<p class='error_article_not_exist'>" . $errors['article_not_exist'] . "</p>";
    } else {

    ?>

    <div class="search_engine_post--flex">

        <div class="search_engine_post">
            <a href="blog-view.php?id=<?php echo $blog['id']; ?>">
                <img src="../img/<?php echo $blog['imagen']; ?>" alt="Foto del Articulo" class="search_engine_post-img">
            </a>
        </div>

        <div class="search_engine_post-info">
            <h1 class="search_engine_post-title"><a class="search_engine_post-title_link" href="blog-view.php?id=<?php echo $blog['id']; ?>"><?php echo $blog['titulo']; ?></a></h1>
            
            
            <p class="search_engine_post-extract"><?php echo $blog['extracto']; ?><a href="blog-view.php?id=<?php echo $blog['id']; ?>" class="search_engine_post-continue">Leer más &raquo;</a>
            </p>
        </div>
            

    </div>

<?php } ?>

<?php endforeach; ?>

</div>

<?php endif; ?>

<!-- End Of Internet Search Engine -->

	<?php

		$id = $_REQUEST['id'];
		
		require '../model/blog_view.model.php';

		$blog_view = new Blog_view();
		$array = $blog_view->devuelve_blog_view($id);
	
?>

<?php if(!isset($_POST['btn-search_engine'])): ?>

<div class="container-blog__view background_white">

<?php foreach ($array as $row) { ?>

    <div class="blog__post-contenido">
        <div class="blog__post">
	        <h1 class="blog__post-titulo"><?php echo $row['titulo']; ?></h1>
	        <p class="blog__post-fecha"><?php echo $row['fecha']; ?></p>
	    
	        <img src="../img/<?php echo $row['imagen']; ?>" alt="Foto del Articulo" class="post-img">
	        <p class="blog__post-texto"><?php echo $row['texto']; ?></p>
        </div>
    </div>
    
 <?php } ?>

<?php

require("../model/blog_commenters.model.php");

$commenter = new Commenters();

// session_start();
// $session = $_SESSION['user'];
$session = "";
if (isset($_SESSION['user'])) {
    $session = $_SESSION['user'];
}

$user = $commenter->getUser($session);
$errors = $commenter->getCommenter();
$commenters_array = $commenter->setCommenter($_GET['id']);

?>
 
    <div class="comentarios" id="comentarios">
        <h3 class="comentarios-titulo">Comentarios</h3>
        <form class="form__commenter" action="" method="POST">
            
            <?php if(empty($user)) { ?>

            	<div class="form__perfil">
            	<img class="form__perfil-img" src="../img/user.png">

        			<div class="form__perfil-content">
        	            <h4 class="form__perfil-content-user">Usuario</h4>

        	<?php } ?>
        	
        	<?php foreach($user as $user): ?>
        	
        	<input type="hidden" name="avatar" value="<?php echo $user['avatar']; ?>">
            <input type="hidden" name="name" value="<?php echo $user['name']; ?>">
            <input type="hidden" name="last_name" value="<?php echo $user['last_name']; ?>">
            <input type="hidden" name="age" value="<?php echo $user['age']; ?>">
            <input type="hidden" name="sex" value="<?php echo $user['sex']; ?>">
            <input type="hidden" name="direction" value="<?php echo $user['direction']; ?>">
            <input type="hidden" name="phone" value="<?php echo $user['phone']; ?>">
            <input type="hidden" name="user" value="<?php echo $user['user']; ?>">
            <input type="hidden" name="mail" value="<?php echo $user['mail']; ?>">
            <input type="hidden" name="blog_id" value="<?php echo $_GET['id']; ?>">


        		<div class="form__perfil">
        			<?php if(!empty($user['avatar'])) { ?>

        			    <img class="form__perfil-img" src="../img/<?php echo $user['avatar']; ?>">

        			<?php } elseif(empty($user['avatar']) && $user['sex'] == 'h') { ?>
        			
        				<img class="form__perfil-img" src="../img/avatar-m.jpg">
        			
        			<?php } elseif(empty($user['avatar']) && $user['sex'] == 'm') { ?>

        				<img class="form__perfil-img" src="../img/avatar-w.png">

        	        <?php } ?>

        			<div class="form__perfil-content">
        	            <h4 class="form__perfil-content-user"><?php echo $user['user']; ?></h4>
	                    
            <?php endforeach; ?>

	                    <textarea class="textarea" name="commenter" placeholder="Escribe un comentario..."></textarea>
	                    <?php

	                    if (!empty($errors['commenter_empty'])) {
	        	            echo "<p class='error'>" . $errors['commenter_empty'] . "</p>";
	                    }

	                    if (!empty($errors['not_session'])) {
	        	            echo "<p class='error'>" . $errors['not_session'] . "</p>";
	                    }

	                    ?>
	                    <input type="submit" name="btn-comment" value="&laquo; Comentar &raquo;" class="btn-comentar">
        			</div>
        		</div>

        </form>

        <?php
        require_once("../model/answered_commenters.php");

        $answered_commenters = new Answered_commenters();
        $errors = $answered_commenters->getAnsweredCommenter();
        $user_array = $answered_commenters->getUserAnswered($session);
        $commenters_answered = $answered_commenters->setAnsweredCommenter($_GET['id'], $_GET['user_id']);
        
        ?>

        <?php

        if (empty($commenters_array)) {
            echo "<p class='show__commenter-empty__commenters'>No hay comentarios aún, se el primero en comentar.</p>";
        }

        ?>

        <?php foreach($commenters_array as $commenters): ?>
        <div class="show__commenter" id="show__commenter">

        	<?php if(!empty($commenters['avatar'])) { ?>

        	    <img class="show__commenter-img" src="../img/<?php echo $commenters['avatar']; ?>">

        	<?php } elseif(empty($commenters['avatar']) && $commenters['sex'] == 'h') { ?>

        		<img class="show__commenter-img" src="../img/avatar-m.jpg">

        	<?php } elseif(empty($commenters['avatar']) && $commenters['sex'] == 'm') { ?>

        		<img class="show__commenter-img" src="../img/avatar-w.png">

        	<?php } else { ?>

        		<img class="show__commenter-img" src="../img/user.png">

        	<?php } ?>

            <div class="show__commenter-width">
        	<div class="show__commenter-content">
                <div class="show__commenter-content-container">
        	        <h4 class="show__commenter-title"><?php echo $commenters['user']; ?></h4>
        	        <p class="show__commenter-date"><?php echo $commenters['commenter_date']; ?></p>
        	        <p class="show__commenter-txt"><?php echo $commenters['commenter']; ?></p>
                    <p class="show__commenter-answer"><a href="blog-view.php?id=<?php echo $_GET['id']; ?>&user_id=<?php echo $commenters['id']; ?>#<?php echo $commenters['id']; ?>">Ver comentarios</a></p>
        	    </div>
                <div class="show__commenter-menu__edit-container">
                    <ul class="show__commenter-menu__edit">
                            <?php

                            if (isset($_SESSION['user'])) {

                                if ($_SESSION['user'] == $commenters['user'] || $_SESSION['user'] == $commenters['mail']) {
                                 
                                
                            ?>

                        <li><span class="icon-cog"></span>


                            <ul class="show__commenter-menu__edit2">
                                <li class="show__commenter-menu__edit2-item" id=""><a class="show__commenter-menu__edit2-link" href="../view/edit_comment.view.php?id=<?php echo $_GET['id']; ?>&user_id=<?php echo $commenters['id']; ?>&user=<?php echo $commenters['user']; ?>&comment=<?php echo $commenters['commenter']; ?>">Editar</a></li>
                               
                                <li class="show__commenter-menu__edit2-item"><a class="show__commenter-menu__edit2-link" href="../model/delete_comment.php?id=<?php echo $_GET['id']; ?> & user_id=<?php echo $commenters['id']; ?>">Borrar</a></li>
                            </ul>
                        </li>
                            <?php } } ?>
                    </ul>
                </div>
            </div>

                <!-- Formulario de respuesta a los comentarios -->

            <div class="show__commenter-content__answer" id="<?php echo $commenters['id']; ?>">

                <!-- Respuestas de comentarios -->

                <?php

                if (empty($commenters_answered)) {
                    echo "<p class='show__commenter2-empty__commenters'>No hay comentarios aún, se el primero en comentar.</p>";
                }

                foreach($commenters_answered as $commenter):

                ?>

                <div class="show__commenter2">

                    <?php if(!empty($commenter['avatar'])) { ?>

                        <img class="show__commenter2-img" src="../img/<?php echo $commenter['avatar']; ?>">

                    <?php } elseif(empty($commenter['avatar']) && $commenter['sex'] == 'h') { ?>

                        <img class="show__commenter2-img" src="../img/avatar-m.jpg">

                    <?php } elseif(empty($commenter['avatar']) && $commenter['sex'] == 'm') { ?>

                        <img class="show__commenter2-img" src="../img/avatar-w.png">

                    <?php } else { ?>

                        <img class="show__commenter2-img" src="../img/user.png">

                    <?php } ?>

                    <div class="show__commenter2-content">
                        <div>
                            <h4 class="show__commenter2-title"><?php echo $commenter['user']; ?></h4>
                            <p class="show__commenter2-date"><?php echo $commenter['commenter_date']; ?></p>
                            <p class="show__commenter2-txt"><?php echo $commenter['commenter']; ?></p>
                        </div>
                        <div>
                            <ul class="show__commenter2-menu__edit">

                            <?php

                            // session_start();
                            if (isset($_SESSION['user'])) {

                                if ($_SESSION['user'] == $commenter['user'] || $_SESSION['user'] == $commenter['mail']) {
                                 
                                
                            ?>

                        <li><span class="icon-cog"></span>


                            <ul class="show__commenter2-menu__edit2">
                                <li class="show__commenter2-menu__edit2-item" id=""><a class="show__commenter2-menu__edit2-link" href="../view/edit_comment_two.php?id=<?php echo $_GET['id']; ?>&user_id=<?php echo $_GET['user_id']; ?>&user_id_two=<?php echo $commenter['id']; ?>&user=<?php echo $commenter['user']; ?>&comment=<?php echo $commenter['commenter']; ?>">Editar</a></li>
                               
                                <li class="show__commenter2-menu__edit2-item"><a class="show__commenter2-menu__edit2-link" href="../model/delete_comment_two.php?id=<?php echo $_GET['id']; ?> & user_id=<?php echo $commenters['id']; ?> & user_id_two=<?php echo $commenter['id']; ?>">Borrar</a></li>
                            </ul>
                        </li>
                            <?php } } ?>


                            </ul>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

                <!-- Fin de respuestas de comentarios -->

                <form class="form__commenter2" action="" method="POST">
            
                    <?php if(empty($user_array)) { ?>

                        <div class="form__perfil2">
                        <img class="form__perfil2-img" src="../img/user.png">

                            <div class="form__perfil2-content">
                                <h4 class="form__perfil2-content-user">Usuario</h4>

                    <?php } ?>
            
                    <?php foreach($user_array as $user): ?>

                    <input type="hidden" name="user_id" value="<?php echo $commenters['id']; ?>">
                    <input type="hidden" name="avatar" value="<?php echo $user['avatar']; ?>">
                    <input type="hidden" name="name" value="<?php echo $user['name']; ?>">
                    <input type="hidden" name="last_name" value="<?php echo $user['last_name']; ?>">
                    <input type="hidden" name="age" value="<?php echo $user['age']; ?>">
                    <input type="hidden" name="sex" value="<?php echo $user['sex']; ?>">
                    <input type="hidden" name="direction" value="<?php echo $user['direction']; ?>">
                    <input type="hidden" name="phone" value="<?php echo $user['phone']; ?>">
                    <input type="hidden" name="user" value="<?php echo $user['user']; ?>">
                    <input type="hidden" name="mail" value="<?php echo $user['mail']; ?>">
                    <input type="hidden" name="blog_id" value="<?php echo $_GET['id']; ?>">


                        <h4 class="form__perfil2-comment__title">Comentar</h4>
                        <div class="form__perfil2">
                            <?php if(!empty($user['avatar'])) { ?>

                                <img class="form__perfil2-img" src="../img/<?php echo $user['avatar']; ?>">

                         <?php } elseif(empty($user['avatar']) && $user['sex'] == 'h') { ?>
                    
                                <img class="form__perfil2-img" src="../img/avatar-m.jpg">
                    
                            <?php } elseif(empty($user['avatar']) && $user['sex'] == 'm') { ?>

                             <img class="form__perfil2-img" src="../img/avatar-w.png">

                            <?php } ?>

                            <div class="form__perfil2-content">
                             <h4 class="form__perfil2-content-user"><?php echo $user['user']; ?></h4>
                        
                    <?php endforeach; ?>

                             <textarea class="textarea2" name="commenter" placeholder="Escribe un comentario..."></textarea>
                             <?php

                                if (!empty($errors['commenter_empty'])) {
                                 echo "<p class='error'>" . $errors['commenter_empty'] . "</p>";
                             }
        
                        if (!empty($errors['not_session'])) {
                                 echo "<p class='error'>" . $errors['not_session'] . "</p>";
                             }

                                ?>
                                <input type="submit" name="btn-comment-answer" value="&laquo; Comentar &raquo;" class="btn-comentar2">
                         </div>
                        </div>

                </form>
            </div>

            <!-- Fin de Formulario de respuesta a los comentarios -->

        </div>

        </div>
        <?php endforeach; ?>
    </div>

</div>

<?php

require("../model/blog_sugerencias.model.php");

$blog = new Blog_sugerencias();
$blog_array = $blog->getBlog_sugerencias($_GET['id']);

?>

<h2 class="post__sugeridos-container-title container-blog__view">Otros articulos que te pueden interesar...</h2>

<div class="post__sugeridos-container container-blog__view">


	<?php foreach($blog_array as $blog): ?>

	<div class="post__sugeridos">
	    <img src="../img/<?php echo $blog['imagen']; ?>" class="post__sugeridos-img">
	    <a href="blog-view.php?id=<?php echo $blog['id']; ?>">
	        <div class="post__sugeridos-text">
		        <h3 class="post__sugeridos-title"><?php echo $blog['titulo']; ?></h3>
		        <p class="post__sugeridos-txt"><?php echo $blog['extracto']; ?></p>
	        </div>
	    	
	    </a>
	</div>

    <?php endforeach; ?>

</div>

<?php endif; ?>

<?php require("footer_blog.php"); ?>