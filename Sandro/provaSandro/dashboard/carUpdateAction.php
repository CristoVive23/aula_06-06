<?php 
    require_once "conn.php"; // include

    $idPv = filter_input(INPUT_POST, 'id');
    $yearPv = filter_input(INPUT_POST, 'anoalex');
    $valueSalPv = filter_input(INPUT_POST, 'salarioalex');
    $valueCarPv = filter_input(INPUT_POST, 'caralex');

    $pCompra = $valueSalPv / $valueCarPv;

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("UPDATE graphicalexcar SET anoalex = :year, salariopaulo = :valuesal, lcaralex = :valuecar,
    compraalex = :pcompra WHERE idalex = :id");

    // Trocar
    $stmt->bindValue(":id", $idPv);
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuesal", $valueSalPv);
    $stmt->bindValue(":valuecar", $valueCarPv);
    $stmt->bindValue(":lcompra", $pCompra); 
        
    // Executar
    $stmt->execute();

    header('location: carForm.php');
?>