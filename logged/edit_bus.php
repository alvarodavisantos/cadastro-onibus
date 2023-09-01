<?php
    include('../connection/connection.php');
    $codBus = $_GET['codBus'];

    $task = "select * from g30_onibus where codigo = '" . $codBus . "'";
    $result = $conn->query($task);
    $row = $result->fetch(PDO::FETCH_OBJ);
?>

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
        <form action="../connection/task_edit_bus.php?cod=<?php echo($row->codigo); ?>" method="post">
            <h1 class="titleCadBus">
                Edição de Ônibus
            </h1>

            <p class="itemCadBus">
                <input type="text" name="origin" id="origin" value="<?php echo($row->origem); ?>">
            </p>
            <p class="itemCadBus">
                <input type="text" name="destiny" id="destiny" value="<?php echo($row->destino); ?>">
            </p>
            <p class="itemCadBusClock">
                Saída:<br>
                <input type="time" name="originTime" id="originTime" value="<?php echo($row->hora_saida); ?>">
            </p>
            <p class="itemCadBusClock">
                Chegada:<br>
                <input type="time" name="destinyTime" id="origin" value="<?php echo($row->hora_chegada); ?>">
            </p>
            <p class="buttonRegister">
                <input type="submit" value="Alterar" id="edit" name="edit">
            </p>
            <p class="buttonDelete">
                <input type="submit" value="Excluir" id="delete" name="delete">
            </p>
        </form>
	</div>


</body>
</html>
<?php
    include('../connection/check_login.php');
?>