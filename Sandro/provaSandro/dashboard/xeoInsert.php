<?php 
    require_once "conn.php"; // include

    $yearPv = filter_input(INPUT_POST, 'anoleon');
    $valueXeoPv = filter_input(INPUT_POST, 'processleon');

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("INSERT INTO graphicleonxeo (anoleon, xeonleon) VALUES (:year, :valuexeo)");

    // Trocar
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuexeo", $valueXeoPv);
    
    // Executar
    $stmt->execute();

    header('location: xeoForm.php');
?>