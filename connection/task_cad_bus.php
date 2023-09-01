<?php
include('connection.php');

if(isset($_POST['register'])) {

$origin = $_POST['origin'];
$destiny = $_POST['destiny'];
$originTime = $_POST['originTime'];
$destinyTime = $_POST['destinyTime'];
        
$stmt = $conn->prepare('INSERT INTO g30_onibus (origem, destino, hora_saida, hora_chegada) VALUES
    (:origem, :destino, :hora_saida, :hora_chegada)');
        $stmt->bindValue(':origem', $origin);
        $stmt->bindValue(':destino', $destiny);
        $stmt->bindValue(':hora_saida', $originTime);
        $stmt->bindValue(':hora_chegada', $destinyTime);

        $stmt->execute();
        header("location: ../logged/bus.php");
}else{
    header("location: ../logged/bus.php");
}
?>