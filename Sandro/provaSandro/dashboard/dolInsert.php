<?php 
    require_once "conn.php"; // include

    $yearPv = filter_input(INPUT_POST, 'anoalex');
    $valueSalPv = filter_input(INPUT_POST, 'salarioalex');
    $valueDolPv = filter_input(INPUT_POST, 'ldolalex');

    if ($valueDolPv != 0) {
        $compraAlex = $valueSalPv / $valueDolPv;
    } else {
        $compraAlex = 0;
    }

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("INSERT INTO graphicalexdol (anoalex, salarioalex, ldolalex, compraalex) VALUES (:year, :valuesal, :valuedol, :pcompra)");

    // Trocar
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuesal", $valueSalPv);
    $stmt->bindValue(":valuedol", $valueDolPv); 
    $stmt->bindValue(":pcompra", $compraalex); 
    
    // Executar
    $stmt->execute();

    header('location: dolForm.php');
?>