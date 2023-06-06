<?php 
    require_once "conn.php";

    $idleon = filter_input(INPUT_GET, 'idleon');

    // Prepara
    $stmt = $conn->prepare("DELETE FROM graphicleonpib WHERE idleon = :id");

    // Trocar
    $stmt->bindValue(':id', $idleon);

    // Executar
    $stmt->execute();

   header('location: pibForm.php');
?>