<?php

require_once "conect.php";


//preparar

$stmt= $conect->prepare("SELECT * FROM cliente_salão");



//executar

$stmt->execute();



//listar

$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($list);


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista de cadastros </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

     <!--bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="index-container">

<h1 style="color: white;">Lista de Clientes </h1>


<table border="1" class="position-relative">
    <tr>
        <th> id </th>
        <th> Nome do Cliente </th>
        <th> Email do Cliente </th>
        <th> Data de Nascimento </th>
        <th> Endereço do Cliente </th>
        <th> Ações </th>
    </tr>  

    <?php foreach($list as $product): ?> 
    <tr> 
        <td><?=$product['id']; ?></td>
        <td><?=$product['name']; ?></td>
        <td><?=$product['email']; ?></td>
        <td><?=$product['data_nascimento']; ?></td>
        <td><?=$product['endereco']; ?></td>
        <td>
            <a href="update.php?id=<?=$product['id']; ?>"class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Editar</a>
            <a href="delete.php?id=<?=$product['id']; ?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">deletar</a>
        </td>
    </tr>    
    <?php endforeach; ?>
</table>
<p>
    <a href="cadastro.php" class="btn btn-primary position-relative">Cadastrar Cliente</a>
</p>
</div>
    

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>