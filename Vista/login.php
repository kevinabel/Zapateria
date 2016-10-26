<?php
	session_start();
	session_destroy();
?>
<html>
<head>
	<meta charset = "UTF-8">
	<title>LoginS</title>
	<link href = "css/login.css" rel = "stylesheet" type = "text/css">
</head>
<body  >
<section id= "formulario">
	<center>
			<br><br>
			<div class = "login">
                            <form action = "../controller/login.php" method = "POST">
			<fieldset>
				<legend>Login</legend>
				<p>
						<input type = "text" name = "usuario" placeholder = "Usuario" title = "Se nesecita un usuario" required>
				</p>
				<p>
                                    <input type = "password" name = "pass" placeholder = "Contraseña" title = "Se nesecita una contraseña" required>
				</p>
				<p>
						<input type = "submit" value = "Entrar">
						<input type = "reset" value ="Limpiar">
				</p>
			</fieldset>
			</form>
			</div>
	</center>
</section>
</body>
</html>