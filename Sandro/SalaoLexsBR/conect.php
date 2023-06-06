<?php
$host = "localhost";
$db = "salao"; // aqui voce substitui pelo nome do seu banco de dados//
$user = "root";
$password = "";
try {
    $conect =  new PDO("mysql:host={$host};dbname={$db}",$user ,$password);
} catch (PDOException $err) {
        echo "erro de conexão: " . $err;
}
?>