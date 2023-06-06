<?php 
require_once "conn.php"; // include

$yearPv = filter_input(INPUT_POST, 'anoalex', FILTER_SANITIZE_NUMBER_INT);
$valueSalPv = filter_input(INPUT_POST, 'salarioalex', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$valueCesPv = filter_input(INPUT_POST, 'lcesalex', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$pCompra = $valueSalPv / $valueCesPv;

// Preparar
$stmt = $conn->prepare("INSERT INTO graphicalexces (anoalex, salarioalex, lcesalex, compraalex) VALUES (:year, :valuesal, :valueces, :pcompra)");

// Trocar
$stmt->bindValue(":year", $yearPv);
$stmt->bindValue(":valuesal", $valueSalPv);
$stmt->bindValue(":valueces", $valueCesPv);
$stmt->bindValue(":pcompra", $pCompra); 

// Executar
$stmt->execute();

header('location: cesForm.php');
?>