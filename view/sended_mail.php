<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mensaje Enviado</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			font-family: 'Arial';
		}
		.body_container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 400px;
		}
		.container {
			width: 90%;
			height: 280px;
			background: ;
			box-sizing: border-box;
		}
		/* LOGOTIPO */

		.logo-container {
		  	display: flex;
			justify-content: ;
			flex-wrap: ;
			height: 40px;
			margin: 10px 0 0 10px;
		}

		.logo-letter {
			font-weight: bold;
			font-size: 28px;
			color: #333;
		}

		.logo-letter2 {
			font-size: 28px;
			color: #333;
		}

		.logo-insideweb {
		  	width: 58px;
			height: 30px;
			margin-right: 3px;
			padding-top: 3px;
			object-fit: cover;
		}

		/* FIN DE LOGOTIPO */
		.content {
			text-align: center;
		}
		img {
			width: 180px;
		}
		h3 {
			color: green;
			font-size: 20px;
		}
		p {
			color: #333;
			font-size: ;
			margin-bottom: 20px;
		}
		a {
			padding: 10px;
			background: rgb(240,150,0);
			color: #fff;
			text-decoration: none;
			border-radius: 7px;
		}
		a:hover {
			background: orange;
		}
		@media screen and (min-width: 480px) {
			h3 {
				font-size: 26px;
			}
			p {
				font-size: 18px;
			}
			a {
				font-size: 18px;
			}
		}
		@media screen and (min-width: 768px) {
			h3 {
				font-size: 28px;
			}
			p {
				font-size: 20px;
			}
			a {
				font-size: 20px;
			}
		}
	</style>
</head>
<body>
    <div class='logo-container'>
		<img class='logo-insideweb' id='logo' src='../img/insideweb_logo.png'>
		<p class='logo-letter'>Inside</p><p class='logo-letter2'>WEB</p>
	</div>

	<div class="body_container">
		<div class="container">
			<div class="content">
				<img src="../img/msg.png">
				<h3>Mensaje Enviado</h3>
				<p>En un momento nos ponemos en contacto con usted.</p>
				<a href="../">Ir al Inicio</a>
			</div>
		</div>		
	</div>


</body>
</html>