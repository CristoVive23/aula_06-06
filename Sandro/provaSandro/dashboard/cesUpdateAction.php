<?php 
    require_once "conn.php"; // include

    $idPv = filter_input(INPUT_POST, 'id');
    $yearPv = filter_input(INPUT_POST, 'anoalex');
    $valueSalPv = filter_input(INPUT_POST, 'salarioalex');
    $valueCesPv = filter_input(INPUT_POST, 'cesalex');

    $pCompra = $valueSalPv / $valueCesPv;

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("UPDATE graphicalexces SET anoalex = :year, salarioalex = :valuesal, lcesalex = :valueces,
   pcompra = :pcompra WHERE idalex = :id");

    // Trocar
    $stmt->bindValue(":id", $idPv);
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuesal", $valueSalPv);
    $stmt->bindValue(":valueces", $valueCesPv);
    $stmt->bindValue(":pcompra", $pCompra); 
        
    // Executar
    $stmt->execute();

    header('location: cesForm.php');
?>