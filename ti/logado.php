<?php

require_once './connect.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

$query = "SELECT * FROM users WHERE email = :email";

$values = [':email' => $email];

try {
    $result = $connect->prepare($query);
    $result->execute($values);
} catch (Exception $ex) {
    echo "Error;" . $ex->getMesssage();
    die();
}

$row = $result->fetch(PDO::FETCH_ASSOC);

//var_dump($row);
if (is_array($row)) {
    if (password_verify($password, $row['password'])) {
        echo "logado com sucesso";
    }else{
        header("Location: index.php");
    }
}