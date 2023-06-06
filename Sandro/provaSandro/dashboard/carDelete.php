<?php 
    require_once "conn.php";

    $idalex = filter_input(INPUT_GET, 'idalex');

    // Prepara
    $stmt = $conn->prepare("DELETE FROM graphicalexcar WHERE idalex = :id");

    // Trocar
    $stmt->bindValue(':id', $idalex);

    // Executar
    $stmt->execute();

   header('location: CARform.php');
?>