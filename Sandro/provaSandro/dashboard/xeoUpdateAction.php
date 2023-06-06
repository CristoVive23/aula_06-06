<?php 
    require_once "conn.php"; // include

    $idPv = filter_input(INPUT_POST, 'id');
    $yearPv = filter_input(INPUT_POST, 'anoleon');
    $valueXeoPv = filter_input(INPUT_POST, 'processleon');

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("UPDATE graphicleonxeo SET anoleon = :year, xeonleon = :valuexeo WHERE idleon = :id");

    // Trocar
    $stmt->bindValue(":id", $idPv);
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuexeo", $valueXeoPv);
    
    // Executar
    $stmt->execute();

    header('location: xeoForm.php');
?>