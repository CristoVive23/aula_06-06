<?php 
    require_once "conn.php"; // include

    $yearPv = filter_input(INPUT_POST, 'anoleon');
    $valueSalPv = filter_input(INPUT_POST, 'salarioleon');
    $valueGasPv = filter_input(INPUT_POST, 'gasolinaleon');

    $pCompra = $valueSalPv / $valueGasPv;

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("INSERT INTO graphicleongas (anoleon, salarioleon, lgasoleon, compraLeon) VALUES (:year, :valuesal, :valuegas, :pcompra)");

    // Trocar
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuesal", $valueSalPv);
    $stmt->bindValue(":valuegas", $valueGasPv); 
    $stmt->bindValue(":pcompra", $pCompra);
    
    // Executar
    $stmt->execute();

    header('location: gasForm.php');
?>