				<!DOCTYPE html>
				<html lang="en">
				<head>
				  	<meta charset="utf-8">
				  	<meta http-equiv="Content-Type" content="text/html">
					<meta name="viewport" content="width=device-width,initial-scale=1">
					<meta name="x-apple-disable-message-reformatting">
					<title></title>
				<style>
								* {
									margin:0;
									padding:0;
								}
								.container_bg {
									background-image: linear-gradient(to right top,rgb(100,150,230) 50%,rgb(80,130,190) 50%);
									height:200px;
									padding:10px;
									box-sizing:border-box;
								}
								/* LOGOTIPO */

								.logo-container {
								  display: ;
								  justify-content: ;
								  flex-wrap: ;
								  margin-bottom: ;
								}

								.logo-letter {
								  font-weight: ;
								  font-size: ;
								  color: ;
								}

								.logo-letter2 {
								  font-size: 28px;
								  color: #fff;
								}

								.logo-insideweb {
								  width: ;
								  height: ;
								  margin-right:;
								  padding-top: ;
								  object-fit: ;
								}

								/* FIN DE LOGOTIPO */
								h3, p {
									font-family: Arial;
								}
								.content_txt, footer {
									color:rgb(230,230,230);
								}
								.content_txt {
									line-height:30px;
								}
								.button_p {
									margin-top:20px;
								}
								.button_link {
									padding:;
									border-radius:;
									background:;
									color:;
									text-decoration:;
								}
								.button_link:hover {
									background:rgb(0,70,255);
								}
								.cover_title,.cover_txt {
									text-align:center;
								}
									@media screen and (min-width:768px) {
										.logo-letter,.logo-letter2 {
											font-size:40px;
										}
										.cover_title {
										    font-size:28px;
										}
										.cover_txt {
										    font-size:24px;
										}
									}
								}
							</style>
				</head>
				<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
					<div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:rgb(100,100,100);">

					<table role="presentation" style="width:100%;border:none;border-spacing:0;">
					  <tr>
						<td align="center" style="padding:0;">
						  <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#fff;margin-bottom: 10px;">
							<tr>
							  <td style="padding:10px 0px 0px 0px;text-align:center;font-size:24px;font-weight:bold;">
								<div class="container_bg" style="background-image: linear-gradient(to right top,rgb(100,150,230) 50%,rgb(80,130,190) 50%);height: 230px;padding: 20px;box-sizing: border-box;">

								    <div class="logo-container" style="display: flex;margin-bottom: 2px;">
			   							<img class="logo-insideweb" id="logo" src="https://www.insidewebmx.com/img/insideweb_logo.png" style="width: 58px;height: 30px;margin-right: 3px;padding-top: 3px;object-fit: cover;">
			   							<p class="logo-letter" style="font-weight: bold;font-size: 28px;color: #fff;margin-top:0;">Inside</p>
			   							<p class="logo-letter2" style="font-size: 28px;color: #fff;margin-top:0;">WEB</p>
			      					</div>

									<h3 class="cover_title" style="font-size:28px;margin-bottom:3px;">Hola '.$name.'</h3>
									<p class="cover_txt" style="font-size:18px;">Haz solicitado un cambio de contraseña</p>
								</div>
								</td>
							  </tr>

							  <tr>
							  	<td style="padding:20px;background-color:rgb(100,60,100);">
									<p class="content_txt">Hola ' . $name . ', hemos recibido una solicitud para cambiar tu contraseña. Si no haz enviado esta solicitud ignora este mensaje.</p><br>

									<p class="content_txt">De lo contrario, puedes restablecer tu contraseña haciendo clic en este boton:</p>
									
									<p class="button_p" style="margin-top:20px;"><a class="button_link" style="padding:12px;border-radius:5px;background:rgb(0,50,255);color:#fff;text-decoration:none;" target="_blank" href="https://www.insidewebmx.com/controller/new_password.controller.php?mail=$mail_form&token=$token">Restablecer contraseña</a></p>
							  	</td>
							  </tr>

							  <tr>
							  	<td style="padding:20px;text-align:center;font-size:14px;background-color:#404040;">
									<footer>
										<p class="footer">&copy; 2022 InsideWeb | Todos los derechos reservados</p>
									</footer>
							  	</td>
							  </tr>
				</table>

				</td>
				</tr>
				</table>
			   </div>
			</body>
			</html>
