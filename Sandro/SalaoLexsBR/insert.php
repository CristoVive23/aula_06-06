<?php

require_once "conect.php";

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
$endereco = filter_input(INPUT_POST, 'endereco');


//preparar

    // aqui voce coloca o nome da sua tabela de banco de dados(onde estiver o nome cliente_salão voce substitui pelo nome da sua tabela de banco de dados//
$stmt = $conect->prepare("INSERT INTO cliente_salão (name,email,data_nascimento,endereco) VALUES (:name,:email, :data_nascimento, :endereco)");



//trocar

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':data_nascimento', $data_nascimento);
$stmt->bindValue(':endereco', $endereco);

//executar

$stmt->execute();


header("Location: index.php");

?>