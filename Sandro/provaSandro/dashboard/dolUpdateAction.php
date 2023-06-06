<?php 
    require_once "conn.php"; // include

    $idPv = filter_input(INPUT_POST, 'id');
    $yearPv = filter_input(INPUT_POST, 'anoalex');
    $valueSalPv = filter_input(INPUT_POST, 'salarioalex');
    $valueDollPv = filter_input(INPUT_POST, 'ldolalex');

    $pCompra = $valueSalPv / $valueDollPv;

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("UPDATE graphicalexdol SET anoalex = :year, salarioalex = :valuesal, ldolalex = :valuedol, 
    pcompra = :pcompra WHERE idalex = :id");

    // Trocar
    $stmt->bindValue(":id", $idPv);
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuesal", $valueSalPv);
    $stmt->bindValue(":valuedol", $valueDollPv);
    $stmt->bindValue(":pcompr", $pCompra);
    
    // Executar
    $stmt->execute();

    header('location: DOLform.php');
?>