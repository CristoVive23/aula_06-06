<?php 
    require_once "conn.php"; // include

    $idPv = filter_input(INPUT_POST, 'idleon');
    $yearPv = filter_input(INPUT_POST, 'anoleon');
    $valuePibPv = filter_input(INPUT_POST, 'pibleon');

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("UPDATE graphicleonpib SET anoleon = :year, pibleon = :valuepib WHERE idleon = :id");

    // Trocar
    $stmt->bindValue(":id", $idPv);
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuepib", $valuePibPv);
    
    // Executar
    $stmt->execute();

    header('location: pibForm.php');
?>