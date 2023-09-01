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

	<div class="cadBus">
        <form action="../connection/task_cad_bus.php" method="post">
            <h1 class="titleCadBus">
                Cadastro de Ônibus
            </h1>

            <p class="itemCadBus">
                <input type="text" name="origin" id="origin" placeholder="Origem do Ônibus">
            </p>
            <p class="itemCadBus">
                <input type="text" name="destiny" id="destiny" placeholder="Destino do Ônibus">
            </p>
            <p class="itemCadBusClock">
                Saída:<br>
                <input type="time" name="originTime" id="originTime" placeholder="Origem do Ônibus">
            </p>
            <p class="itemCadBusClock">
                Chegada:<br>
                <input type="time" name="destinyTime" id="origin" placeholder="Origem do Ônibus">
            </p>
            <p class="buttonRegister">
                <input type="submit" value="Cadastrar" id="register" name="register">
            </p>
        </form>
	</div>


</body>
</html>
<?php
    include('../connection/check_login.php');
?>