<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="navbar">
        <a href="initial.php" class="homeIcon">
            <img src="../imgs/home.png" alt="ícone de home" width="80em" class="homeImage">
        </a>
        <ul class="links">
            <li>
                <a href="../connection/logout">
                    Logout
                </a>
            </li>
        </ul>
    </div>

	<div class="menuOptions">
		<h1 class="titleOptions">
			Opções
		</h1>

		<p class="itemOptions">
            <a href="./bus.php">
                Consulta de Ônibus
            </a>
        </p>
		<p class="itemOptions">
            <a href="./cad_bus.php">
                Cadastro de Ônibus
            </a>
        </p>
	</div>


</body>
</html>
<?php
    include('../connection/check_login.php');
?>