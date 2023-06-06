<?php

require_once "conect.php";

$id = filter_input(INPUT_GET, 'id');


//echo $id;


//preparar

$stmt= $conect->prepare("SELECT * FROM cliente_salão WHERE id = :id");

//trocar

$stmt->bindValue(':id', $id);

//executar

$stmt->execute();

//listar 1

$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro </title>
    <link rel="stylesheet" href="style.css">
     <!--bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 style="color:white"> Cadastrar cliente </h1>

    <form action="update-Action.php" method="post">
        <input type="hidden" name="id" value="<?=$product['id']; ?>">
        
        <div class="col-md-6">
            <label for="name"> Digite seu nome : </label>
            <input type="text" name="name" id="name" value="<?=$product['name']; ?>">
        </div>

        <div class="col-md-6">
            <label for="email"> Digite seu email: </label>
            <input type="text" name="email" id="email" value="<?=$product['email']; ?>">
        </div>

        <div class="col-md-6">
            <label for="data_nascimento"> Digite sua data de nascimento: </label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?=$product['data_nascimento']; ?>">
        </div>

        <div class="col-12">
            <label for="endereco"> Digite seu Endereço: </label>
            <textarea name="endereco" id="endereco" value="<?=$product['endereco']; ?>"  rows="3"></textarea>

        </div>

        <div style="margin-bottom:10px;">
            <input type="Submit" value="Atualizar cadastro" class="btn btn-primary">
        </div>

    </form>

    </div>
    
    
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>