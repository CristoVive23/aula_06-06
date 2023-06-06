<?php 
    require_once "conn.php"; // include

    $idPv = filter_input(INPUT_POST, 'id');
    $yearPv = filter_input(INPUT_POST, 'anoleon');
    $valueSalPv = filter_input(INPUT_POST, 'salarioleon');
    $valueGasPv = filter_input(INPUT_POST, 'gasolinaleon');

    $pCompra = $valueSalPv / $valueGasPv;

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("UPDATE graphicleongas SET anoleon = :year, salarioleon = :valuesal, lgasoleon = :valuegas, 
    pcompra = :pcompra WHERE idleon = :id");

    // Trocar
    $stmt->bindValue(":id", $idPv);
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuesal", $valueSalPv);
    $stmt->bindValue(":valuegas", $valueGasPv);
    $stmt->bindValue(":pcompra", $pcompra);
    
    // Executar
    $stmt->execute();

    header('location: gasForm.php');
?>