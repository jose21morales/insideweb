<?php
require "model/blog.model.php";
$post = new Blog();
$registros_blog = $post->devuelve_blog();

$blog_array = $post->search_engine();
$errors = $post->search_engine();

require 'model/navegacion.user.model.php';
require 'view/navegacion.php';
require 'view/blog.view.php';
require 'view/footer.php';
	
?>