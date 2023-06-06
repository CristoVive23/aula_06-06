<?php 
    $hostName = "localhost";
    $dataBase = "dataalex";
    $user = "root";  
    $pass = "";   

    try {
        $conn = new PDO("mysql:host={$hostName}; dbname={$dataBase}", $user, $pass);
        /* echo "Conexão estabelecida"; */
    } catch (PDOException $e) {
        /* echo "ERRO na Conexão: " . $e; */
        echo "O servidor temporariamente instável, favor recarregue a paguina ou volte mais tarde...";
    }
?>