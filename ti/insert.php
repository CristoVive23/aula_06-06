<?php

require_once "./connect.php";

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$password_hash = password_hash($password, PASSWORD_DEFAULT);

//echo "$name - $email - $password - $password_hash";

$stmt = $connect->prepare("SELECT * FROM users WHERE email = :email");
$stmt->bindValue(':email', $email);
$stmt->execute();

if ($stmt->rowCount() === 0) {

    $stmt = $connect->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password_hash);
   
    $stmt->execute();

    echo "Usuário Cadastrado com sucesso!";
}else{
    echo "Usuário já existente!";
}