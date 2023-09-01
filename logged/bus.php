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
			Horários de Ônibus
		</h1>

		<table class="tableBus">
            <tr>
                <th>
                    Origem
                </th>
                <th>
                    Destino
                </th>
                <th>
                    Saída
                </th>
                <th>
                    Chegada
                </th>
                <th>
                    Operação
                </th>
            </tr>
            <?php
                require_once '../connection/connection.php';
                $result = $conn->query("SELECT * FROM g30_onibus");
                $count = $result->rowCount();
                if ($count > 0) {
                    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                        echo ("
                            <tr class='rowBus'>
                                <td>
                                    $row->origem
                                </td>
                                <td>
                                    $row->destino
                                </td>
                                <td>
                                    $row->hora_saida
                                </td>
                                <td>
                                    $row->hora_chegada
                                </td>
                                <td>
                                    <a class='btnEditBus' href='edit_bus.php?codBus=$row->codigo'>
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        ");
                    }
                }
            ?>

        </table>
	</div>


</body>
</html>
<?php
    include('../connection/check_login.php');
?>
