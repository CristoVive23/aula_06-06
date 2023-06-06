<?php 
    require_once "conn.php"; // include

    $yearPv = filter_input(INPUT_POST, 'anoleon');
    $valuePibPv = filter_input(INPUT_POST, 'pibleon');

    // Preparar
    /* stmt == Statement */
    $stmt = $conn->prepare("INSERT INTO graphicleonpib (anoleon, pibleon) VALUES (:year, :valuepib)");

    // Trocar
    $stmt->bindValue(":year", $yearPv);
    $stmt->bindValue(":valuepib", $valuePibPv);
    
    // Executar
    $stmt->execute();

    header('location: pibForm.php');
?>