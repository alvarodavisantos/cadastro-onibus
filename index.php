<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<title>Document</title>
</head>
<body style="padding-top: 0px;">
	<div class="login">
		<h1 class="titleLogin">
			Login
		</h1>
		<?php
			if(isset($_GET['error'])) {
				if($_GET['error']==1){
					echo("
							<p style='color: #a83232;'>
								Usuário ou senha incorretos
							</p>
					");
				}if($_GET['error']==2){
					echo("
							<p style='color: #a83232;'>
								Logue antes para acessar a página desejada
							</p>
					");
				}
			}

		?>
		<form name="accessForm" action="./connection/login.php" method="post">
			<p class="inputLogin">
				<input type="text" name="username" id="username" placeholder="Usuário">
			</p>
			<p class="inputLogin">
				<input type="password" name="password" id="password" placeholder="Senha">
			</p>
			<p class="buttonLogin">
				<input type="submit" value="login" id="login">
			</p>
		</form>
	</div>


</body>
</html>