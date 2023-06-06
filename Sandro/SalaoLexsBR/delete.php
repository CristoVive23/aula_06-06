<?php

require_once "conect.php";
$id = filter_input(INPUT_GET, 'id');
//echo $id;
//preparar

$stmt = $conect->prepare("DELETE FROM cliente_salão WHERE id = :id");

//trocar

$stmt->bindValue(':id', $id);

//executar

$stmt->execute();

header("Location: index.php");


?>