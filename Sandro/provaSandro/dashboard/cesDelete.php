<?php 
    require_once "conn.php";

    $idalex = filter_input(INPUT_GET, 'idalex');

    // Prepara
    $stmt = $conn->prepare("DELETE FROM graphicalexces WHERE idalex = :id");

    // Trocar
    $stmt->bindValue(':id', $idalex);

    // Executar
    $stmt->execute();

   header('location: cesForm.php');
?>