<?php 
include_once('config/conn.php');

$titulo = $_POST['title']; 
$descricao = $_POST['description']; 
//prepara
$stmt = $connect->prepare("INSERT INTO posts(titulo,descricao)VALUES(:TITULO, :DESCRICAO)");
//troca 
$stmt->bindParam(':TITULO' $title);
$stmt->bindParam(':DESCRICAO' $description); 
//executa 
$stmt->execute(); 
echo "ok"; 





?>