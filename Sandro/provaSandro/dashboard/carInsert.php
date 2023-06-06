<?php 
require_once "conn.php"; // include

$yearPv = filter_input(INPUT_POST, 'anoalex', FILTER_SANITIZE_NUMBER_INT);
$valueSalPv = filter_input(INPUT_POST, 'salarioalex', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$valueCarPv = filter_input(INPUT_POST, 'lcaralex', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$pCompra = $valueSalPv / $valueCarPv;

// Preparar
$stmt = $conn->prepare("INSERT INTO graphicalexcar (anoalex, salarioalex, lcaralex, compraalex) VALUES (:year, :valuesal, :valuecar, :pcompra)");

// Trocar
$stmt->bindValue(":year", $yearPv);
$stmt->bindValue(":valuesal", $valueSalPv);
$stmt->bindValue(":valuecar", $valueCarPv);
$stmt->bindValue(":pcompra", $pCompra);

// Executar
$stmt->execute();

header('location: carForm.php');
?>