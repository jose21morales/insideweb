<div class="banner-navegacion">
	<img class="banner-img-navegacion" src="img/cabeza.png">
	<div class="contenedor-navegacion">
              <div class="container-blog">
		<h2 class="banner-titulo-navegacion">Contactanos...</h2>
		<p class="banner-txt-navegacion">+52 1 962 334 03 80</p>
              </div>
	</div>
</div>

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

$count = count($blog_array);

if (empty($errors['empty']) && empty($errors['article_not_exist'])) {
    if ($count == 1) {
        echo "<i><p class='search_engine_post-result2'>Hay " . $count . " resultado</p></i>";
    } else {
        echo "<i><p class='search_engine_post-result2'>Hay " . $count . " resultados</p></i>";
    }
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
            <a href="view/blog-view.php?id=<?php echo $blog['id']; ?>">
                <img src="img/<?php echo $blog['imagen']; ?>" alt="Foto del Articulo" class="search_engine_post-img">
            </a>
        </div>

        <div class="search_engine_post-info">
            <h1 class="search_engine_post-title"><a class="search_engine_post-title_link" href="view/blog-view.php?id=<?php echo $blog['id']; ?>"><?php echo $blog['titulo']; ?></a></h1>
            
            
            <p class="search_engine_post-extract"><?php echo $blog['extracto']; ?><a href="view/blog-view.php?id=<?php echo $blog['id']; ?>" class="search_engine_post-continue">Leer más &raquo;</a>
            </p>
        </div>
            

    </div>

<?php } ?>

<?php endforeach; ?>

</div>

<?php endif; ?>

<!-- End Of Internet Search Engine -->

<?php if(!isset($_POST['btn-search_engine'])): ?>

<div class="container-blog">

    <div class="post-contenido">
    	
    	<?php foreach($registros_blog as $post): ?>
    	
    	<div class="post">
	    
        <h1 class="post-titulo"><a class="post-titulo-link" href="view/blog-view.php?id=<?php echo $post['id']; ?>&user_id="><?php echo $post['titulo']; ?></a></h1>

	    <p class="fecha"><?php echo $post['fecha']; ?></p>
	    
        <a href="view/blog-view.php?id=<?php echo $post['id']; ?>&user_id=">
	    <img src="img/<?php echo $post['imagen']; ?>" alt="Foto del Articulo" class="post-img">
            </a>
	    
        <p class="extracto"><?php echo $post['extracto']; ?><a href="view/blog-view.php?id=<?php echo $post['id']; ?>&user_id=" class="continuar">Leer más &raquo;</a>
	    </p>
        
        </div>

        <?php endforeach; ?>

    </div>

<?php
//  }

require("model/paginacion.php");

?>

    <!-- ======================== Paginación ============================= -->

    <?php require("model/paginacion.php"); ?>
    
    <?php

    //Operacion matematica para boton siguiente y atras
    $incrementNum = (($pagina +1) <= $total_paginas)?($pagina +1):1;
    $decrementNum = (($pagina -1) < 1)?1:($pagina -1);

    ?>
<nav>
    <ul class="paginacion container">
        <li class="li btn"><a class="pag-link" href="?action=blog&pagina=<?php echo $decrementNum; ?>">&laquo;</a></li>

    <?php

    //Se resta y suma con el numero de pag actual con el cantidad de 
    //numeros  a mostrar
    $desde = $pagina-(ceil($post_por_pagina/2) -1);
    $hasta = $pagina+(ceil($post_por_pagina/2) -1);

    //Se valida
    $desde=($desde < 1)?1:$desde;
    $hasta=($hasta < $post_por_pagina)?$post_por_pagina:$hasta;
    //Se muestra los numeros de paginas
    for ($i=$desde; $i <= $hasta ; $i++) {
        //Se valida la paginacion total
        //de registros
        if ($i <= $total_paginas) {
            //Validamos la pag activo
            if ($i == $pagina) {
                echo "<li class='li' id='active'><a class='pag-link' href='?action=blog&pagina=" . $i . "'>" . $i . "</a></li>";
            } else {
                echo "<li class='li'><a class='pag-link' href='?action=blog&pagina=" . $i . "'>" . $i . "</a></li>";
            }
        }
    }

    echo "<li class='li'><a class='pag-link' href='?action=blog&pagina=" . $incrementNum . "'>&raquo;</a></li></ul></nav>";

    ?>

    </ul>
</nav>

</div>

<?php endif; ?>
