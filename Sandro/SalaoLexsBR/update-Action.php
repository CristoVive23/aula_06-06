<?php

require_once "conect.php";

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
$endereco = filter_input(INPUT_POST, 'endereco');

//echo "$nameProduct -$priceProduct";


//preparar

$stmt = $conect->prepare("UPDATE cliente_salão SET  name = :name, email = :email, data_nascimento = :data_nascimento, endereco = :endereco WHERE id = :id");



//trocar
$stmt->bindValue(':id', $id);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':data_nascimento', $data_nascimento);
$stmt->bindValue(':endereco', $endereco);

//executar
$stmt->execute();

header("Location: index.php");
