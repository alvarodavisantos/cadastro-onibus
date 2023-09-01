<?php
include('connection.php');

if(isset($_POST['edit'])) {
    $code = $_GET['cod'];
    $origin = $_POST['origin'];
    $destiny = $_POST['destiny'];
    $originTime = $_POST['originTime'];
    $destinyTime = $_POST['destinyTime'];
    
    $stmt = $conn->prepare('UPDATE g30_onibus SET
        origem = :origem,
        destino = :destino,
        hora_saida = :hora_saida,
        hora_chegada = :hora_chegada WHERE codigo = :codigo');
    $stmt->bindValue(':codigo', $code);
    $stmt->bindValue(':origem', $origin);
    $stmt->bindValue(':destino', $destiny);
    $stmt->bindValue(':hora_saida', $originTime);
    $stmt->bindValue(':hora_chegada', $destinyTime);
    $stmt->execute();

    header("location: ../logged/bus.php");
}else if(isset($_POST['delete'])){
    $code = $_GET['cod'];
    $stmt = $conn->prepare('DELETE from g30_onibus WHERE codigo = :codigo');
    $stmt->bindValue(':codigo', $code);
    $stmt->execute();
    
    header("location: ../logged/bus.php");
}
?>